<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa PDF</title>
</head>
<body>
    Ceta Data Mahasiswa PDF
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Mahasiswa</td>
                <td>NIM</td>
                <td>Prodi</td>
                <td>Jenis Kelamin</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>
                        {{ $data->id }}
                    </td>
                    <td>
                        {{ $data->nama }}
                    </td>
                    <td>
                        {{ $data->nim }}
                    </td>
                    <td>
                        {{ $data->prodi }}
                    </td>
                    <td>
                        {{ $data->j_kel }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <script type="text/javascript">
        window.print();
    </script> --}}
</body>
</html>