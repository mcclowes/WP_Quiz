<!DOCTYPE html>
<html>
<head>
<title>quizhint</title>
<?php $questions = json_decode(file_get_contents("testQuestions.json"), true); ?>
</head>
<body>
<?php print_r($questions[questions][$_GET[questionNumber]][hint]); ?>
</body>
</html>