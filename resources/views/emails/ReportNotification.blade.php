<!DOCTYPE html>
<html>
<head>
    <title>Report Notifications</title>
</head>
<body>
    <p>Hello
    <p>This is a report mail from </p>
    <p>{{$data['from_report']}} reported against</p>
    <p>{{ $data['to_report'] }} because he abused some bad word to {{$data['from_report']}}</p>
    <p>Message-{{$data['report_msg']}}</p>
    <p>Thank you</p>
</body>
</html>