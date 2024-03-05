<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dogs.index')}}">Dog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{route('cats.index')}}">Cat</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Cat list</h2>
        <div class="text-end">

            <!-- 第一個連結 route() 裡面的名子是由 資料夾名稱 + cat controller 底下的 create 函數 -->
            <a href="{{route('cats.create')}}">Add</a>&nbsp;
            <a href="{{route('apple')}}">single</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Operate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>
                        <button>編輯</button><button>刪除</button>
                    </td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>
                        <button>編輯</button><button>刪除</button>
                    </td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>
                        <button>編輯</button><button>刪除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>