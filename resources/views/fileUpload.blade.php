<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>업로드</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<form name="form1" method="post" enctype="multipart/form-data" action="upload.php">
    <table width="600" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <td colspan="2" bgcolor="#FFFFFF">ㅇㅅㅇ</td>
        </tr>
        <tr>
            <td width="150" align="center" bgcolor="#FFFFFF">업로드할 파일</td>
            <td width="464" bgcolor="#FFFFFF"><input type="file" name="myFile" size="60" /></td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#FFFFFF"><input type="submit" value="파일 업로드" />
                <input type="reset" value="취소" /></td>
        </tr>
    </table>
</form>

 ExampleController extends Controller {

    public function index() {

        model = sfasdfsdf;

        return $this->view("index",data);


    }

  Route.php

    Route::get('\photo'){
        return new PhotoController();
    }

 }



</body>
</html>
