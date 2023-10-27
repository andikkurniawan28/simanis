@extends("template.admin.app_form_create")

@section("content")
<form action="{{ route("mata_uang.store") }}" method="POST">
    @csrf @method("POST")
    <p>{{ strtoupper("tgl") }} <input type="date" name="tgl"></p>
    <p>{{ strtoupper("kode") }} <input type="text" name="kode"></p>
    <p>{{ strtoupper("kurs") }} <input type="number" step="any" name="kurs"></p>
    <p>{{ strtoupper("keterangan") }} <input type="text" name="keterangan"></p>
    <p><button type="submit">Simpan</button></p>
</form>
@endsection
