<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Praktikum ORM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f3f6fa;
        }
        h1 {
            color: #1e3a5f;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #1e3a5f;
            color: white;
        }
        tr:nth-child(even) {
            background: #f0f4f8;
        }
    </style>
</head>
<body>

    <h1>Data Mahasiswa</h1>
    <p>Praktikum Pemodelan Relasi ORM Laravel</p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>Alamat</th>
                <th>Mata Kuliah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->studyProgram?->name ?? '-' }}</td>
                    <td>{{ $student->profile?->address ?? '-' }}</td>
                    <td>
                        @forelse ($student->courses as $course)
                            {{ $course->name }}@if (!$loop->last), @endif
                        @empty
                            Belum mengambil mata kuliah
                        @endforelse
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
