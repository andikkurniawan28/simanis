@extends("template.admin.app_table_crud")

@section("content")
<a href="{{ route("mata_uang.create") }}">{{ strtoupper("tambah") }}</a>
<table border="1">
    <tr>
        <th>{{ strtoupper("tgl") }}</th>
        <th>{{ strtoupper("kode") }}</th>
        <th>{{ strtoupper("kurs") }}</th>
        <th>{{ strtoupper("keterangan") }}</th>
        <th>{{ strtoupper("tindakan") }}</th>
    </tr>
    @foreach ($mata_uangs as $mata_uang)
    <tr>
        <td>{{ $mata_uang->tgl }}</td>
        <td>{{ $mata_uang->kode }}</td>
        <td>{{ $mata_uang->kurs }}</td>
        <td>{{ $mata_uang->keterangan }}</td>
        <td>
            <a href="{{ route("mata_uang.edit", $mata_uang->kode) }}">{{ strtoupper("edit") }}</a>
            <form action="{{ route("mata_uang.destroy", $mata_uang->kode) }}" method="POST">
                @csrf @method("DELETE")
                <button type="submit">{{ strtoupper("hapus") }}</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
