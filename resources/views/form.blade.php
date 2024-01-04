<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    @if (isset($editform))

        <form class="mx-1 mx-md-4" action="{{ url('formedit/' . $editform->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <form class="border text-center border-dark pb-5 pt-5" action="{{ url('/form') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div>
                    Name<input type="text" name="name" value="{{ $editform->name }}">
                </div>
                <div>
                    E-Mail<input type="email" name="email" value="{{ $editform->email }}">
                </div>
                <div>
                    Number<input type="number" name="number" value="{{ $editform->number }}">
                </div>
                <div>
                    Password<input type="password" name="passsword" value="{{ $editform->number }}">
                </div>
                <div>
                    <label>Gender :</label>
                    male<input type="radio" name="Gender" value="male">
                    female<input type="radio" name="Gender" value="Female">
                </div>
                <div>
                    <label>Qualification :</label>
                    10<input type="checkbox" name="Qualification" value="10">
                    12<input type="checkbox" name="Qualification" value="12">
                    Graduated <input type="checkbox" name="Qualification" value="Graduated">
                </div>
                <div>
                    Date of Birth<input type="date" name="dob" value="{{ $editform->dob }}">
                </div>
                <div>
                    Colour <input type="color" name="color" value="{{ $editform->color }}">
                </div>
                <div>
                    Upload 'File' <input type="file" name="file" value="" value="{{ $editform->file }}">
                </div>
                <div>
                    <label for="language">Choose a language</label>

                    <select name="language" id="language">
                        <option value="c">c</option>
                        <option value="java">java</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
                    <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Update</button>
                </div>
            </form>
        @else
            <form class="border text-center border-dark pb-5 pt-5" action="{{ url('/form') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div>
                    Name<input type="text" name="name">
                </div>
                <div>
                    E-Mail<input type="email" name="email">
                </div>
                <div>
                    Number<input type="number" name="number">
                </div>
                <div>
                    Password<input type="password" name="passsword">
                </div>
                <div>
                    <label>Gender :</label>
                    male<input type="radio" name="Gender" value="male">
                    female<input type="radio" name="Gender" value="Female">
                </div>
                <div>
                    <label>Qualification :</label>
                    10<input type="checkbox" name="Qualification" value="10">
                    12<input type="checkbox" name="Qualification" value="12">
                    Graduated <input type="checkbox" name="Qualification" value="Graduated">
                </div>
                <div>
                    Date of Birth<input type="date" name="dob">
                </div>
                <div>
                    Colour <input type="color" name="color">
                </div>
                <div>
                    Upload 'File' <input type="file" name="file">
                </div>
                <div>
                    <label for="language">Choose a language</label>

                    <select name="language" id="language">
                        <option value="c">c</option>
                        <option value="java">java</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                    </select>
                </div>
                <div> <input type="submit" name="submit">
                </div>
            </form>
            
            <div class="row">
                <div class="col-md-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <th>Sr No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>number</th>
                            <th>Gender</th>
                            <th>Qualification</th>
                            <th>Date Of Birth</th>
                            <th>color</th>
                            <th>language</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            @foreach ($form as $keys => $fo)
                                <tr>
                                    <td>{{ $keys + 1 }}</td>
                                    <td><img scr="{{url('storage/app/'.$fo->file)}}" style="width:150px; height: 100px;"></td>
                                    <td>{{ $fo->name }}</td>
                                    <td>{{ $fo->email }}</td>
                                    <td>{{ $fo->number }}</td>
                                    <td>{{ $fo->Gender }}</td>
                                    <td>{{ $fo->Qualification }}</td>
                                    <td>{{ $fo->dob }}</td>
                                    <td>{{ $fo->color }}</td>
                                    <td>{{ $fo->language }}</td>
                                    <td>
                                        <a href="{{ url('formedit/' . $fo->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('formdelete/' . $fo->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>
