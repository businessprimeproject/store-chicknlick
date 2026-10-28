<!DOCTYPE html>
<html lang="en">
<body>
  <h2>New Franchise Inquiry</h2>
  <p>A customer submitted a franchise inquiry through the website.</p>
  <table cellpadding="8" cellspacing="0" border="1">
    @foreach ($inquiry as $field => $value)
      <tr>
        <th align="left">{{ ucfirst(str_replace(['_', '-'], ' ', $field)) }}</th>
        <td>{{ is_array($value) ? implode(', ', $value) : $value }}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>
