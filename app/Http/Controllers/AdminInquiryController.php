<?php

namespace App\Http\Controllers;

use App\Models\FranchiseInquiry;
use Illuminate\Http\Request;

class AdminInquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = FranchiseInquiry::query()->latest();

        if ($search = trim((string) $request->input('search'))) {
            $query->where(function ($builder) use ($search) {
                $builder->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('preferred_location', 'like', "%{$search}%");
            });
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        return view('admin.inquiries.index', [
            'inquiries' => $query->paginate(15)->withQueryString(),
            'statuses' => FranchiseInquiry::STATUSES,
        ]);
    }

    public function show(FranchiseInquiry $inquiry)
    {
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, FranchiseInquiry $inquiry)
    {
        $data = $request->validate(['status' => ['required', 'in', FranchiseInquiry::STATUSES]]);
        $inquiry->update($data);

        return back()->with('success', 'Inquiry status updated.');
    }

    public function destroy(FranchiseInquiry $inquiry)
    {
        $inquiry->delete();

        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted.');
    }

    public function export(Request $request)
    {
        $inquiries = FranchiseInquiry::query()->latest()->get();
        $filename = 'franchise-inquiries-'.now()->format('Y-m-d-His').'.csv';

        return response()->streamDownload(function () use ($inquiries) {
            $output = fopen('php://output', 'w');
            fputcsv($output, ['Full Name', 'Contact Number', 'Email', 'Preferred Location', 'Investment Budget', 'Message', 'Status', 'Submitted At']);
            foreach ($inquiries as $inquiry) {
                fputcsv($output, [$inquiry->full_name, $inquiry->contact_number, $inquiry->email, $inquiry->preferred_location, $inquiry->investment_budget, $inquiry->message, $inquiry->status, $inquiry->created_at->toDateTimeString()]);
            }
            fclose($output);
        }, $filename, ['Content-Type' => 'text/csv; charset=UTF-8']);
    }
}
