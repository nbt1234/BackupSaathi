<!DOCTYPE html>
<html>
<head>
    <title>Report Notifications</title>
</head>
<body>
    <p>Hello
    <p>This is a report mail from </p>
    <p><?php echo e($data['from_report']); ?> reported against</p>
    <p><?php echo e($data['to_report']); ?> because he abused some bad word to <?php echo e($data['from_report']); ?></p>
    <p>Message-<?php echo e($data['report_msg']); ?></p>
    <p>Thank you</p>
</body>
</html><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/emails/ReportNotification.blade.php ENDPATH**/ ?>