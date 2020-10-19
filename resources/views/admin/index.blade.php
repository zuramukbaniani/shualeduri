<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('AdminSave') }}" method="post">
    @csrf
        <label for=""> ჟანრი  </label>
        <div>
            <input type="text" name="janr">
        <div>
        <button>დამატება</button>
    </form>
</body>
</html>