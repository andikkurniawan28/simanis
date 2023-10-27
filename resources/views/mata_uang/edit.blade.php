@extends("template.admin.app_form_edit")

@section("content")
<form action="{{ route("mata_uang.update", $mata_uang->kode) }}" method="POST">
    @csrf @method("PUT")
    <p>{{ strtoupper("tgl") }} <input type="date" name="tgl" value="{{ $mata_uang->tgl }}"></p>
    <p>{{ strtoupper("kode") }} <input type="text" name="kode" value="{{ $mata_uang->kode }}" readonly></p>
    <p>{{ strtoupper("kurs") }} <input type="number" step="any" name="kurs" value="{{ $mata_uang->kurs }}"></p>
    <p>{{ strtoupper("keterangan") }} <input type="text" name="keterangan" value="{{ $mata_uang->keterangan }}"></p>
    <p><button type="submit">Simpan</button></p>
</form>
@endsection
