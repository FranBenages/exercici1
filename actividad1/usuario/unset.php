<?php
setcookie('username', '', time()-100);
setcookie('date', '', time()-100);
setcookie('pass', '', time()-100);
header('Location:form.html');