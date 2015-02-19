<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 buttons-wrapper">
            <button class="btn btn-success btn-sm compile-execute"><i class="fa fa-fw fa-cog"></i> Compile &amp; Execute</button>
        </div>
        <div class="col-lg-6 editor-wrapper top">
<div id="editor">import java.util.Arrays;

public class Main{

     public static void main(String []args){
        int arr[] = {5,6,1,2,3};
        int arrCount = arr.length;
        
        for(int i = 0; i < arrCount; i++){
            System.out.print(arr[i] + " ");
        }
        
        System.out.println();
        
        // Will sort array by values
        Arrays.sort(arr);
        
        for(int i = 0; i < arrCount; i++){
            System.out.print(arr[i] + " ");
        }
     }
}</div>
        </div>
        <div class="col-lg-6 output-wrapper top">
            <h1>Output</h1>
            <div class="output-theater"></div>
        </div>
    </div>
</div>

<script src="assets/plugins/jquery.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/jq.function.js" type="text/javascript"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/java");
</script>
</body>
</html>