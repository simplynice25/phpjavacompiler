<?php

$code = $_GET['code'];
$filename = "Main-" . uniqid();
$javaPath = __DIR__ . "/java/";

// try in action
$codeExtract = explode("{", $code);
$classExtract = $codeExtract[0];
$textCounter = explode(' ', $classExtract);
$txtCount = count($textCounter);
if ($textCounter[$txtCount-1] != "class") {
    $class = trim($textCounter[$txtCount-1]);
} else {
    $class = trim($textCounter[$txtCount]);
}

// Create the java file
if ($javaFile = fopen("$javaPath$filename.java", "w") )
{
    // Write the code to the java file
    fwrite($javaFile, $code);
    fclose($javaFile);

    // Generate class file for java file
    $classOutput = exec("javac java/$filename.java && cd java && java -cp . $class");
    $warning = "alert-success";
    if (empty($classOutput))
    {
        $classOutput = "Something went wrong.";
        $warning = "alert-danger";
    }

    echo json_encode(array("message" => "<div class='alert $warning'><i class='fa fa-fw fa-exclamation-triangle'></i> $classOutput</div>"));
}