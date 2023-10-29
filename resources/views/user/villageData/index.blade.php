@extends('user.layouts.main')

@section('content')
@if (!$gender->count() && $totalGenderAll === 0)
<div class="container no-data-1">
    <div class="no-data-2">
        <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
        <h5>Tidak ada data!</h5>
    </div>
</div>
@else
<div class="container data-desa-1">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <select class="form-select" size="5" aria-label="Multiple select example">
                <option value="1" selected>Jenis Kelamin</option>
                <option value="2">Kelompok Umur</option>
                <option value="3">Pendidikan</option>
                <option value="4">Pekerjaan</option>
                <option value="5">Penghasilan</option>
            </select>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="card shadow content-data">
                <h1 class="text-center">Demografi Penduduk</h1>
                <div class="card border">
                    {{-- JENIS KELAMIN --}}
                    <table id="table-1">
                        <thead>
                            <tr class="tabel-head">
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gender as $item)
                            <tr>
                                <td>{{ $item->gender }}</td>
                                <td>{{ number_format($item->total, 0, '.', '.') }}</td>
                                <td>{{ number_format(($item->total / $totalGenderAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="tabel-foot">
                                <td>Total</td>
                                <td>{{ number_format($totalGenderAll, 0, '.', '.') }}</td>
                                <td>{{ number_format(($totalGenderAll / $totalGenderAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- UMUR --}}
                    <table id="table-2" style="display: none">
                        <thead>
                            <tr class="tabel-head">
                                <th scope="col">Umur</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($umur as $item)
                            <tr>
                                <td>{{ $item->age }}</td>
                                <td>{{ number_format($item->total, 0, '.', '.') }}</td>
                                <td>{{ number_format(($item->total / $totalumurAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="tabel-foot">
                                <td>Total</td>
                                <td>{{ number_format($totalumurAll, 0, '.', '.') }}</td>
                                <td>{{ number_format(($totalumurAll / $totalumurAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- PENDIDIKAN --}}
                    <table id="table-3" style="display: none">
                        <thead>
                            <tr class="tabel-head">
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendidikan as $item)
                            <tr>
                                <td>{{ $item->education }}</td>
                                <td>{{ number_format($item->total, 0, '.', '.') }}</td>
                                <td>{{ number_format(($item->total / $totalPendidikanAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="tabel-foot">
                                <td>Total</td>
                                <td>{{ number_format($totalPendidikanAll, 0, '.', '.') }}</td>
                                <td>{{ number_format(($totalPendidikanAll / $totalPendidikanAll) * 100, 1)}} &#40;%&#41;
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- PEKERJAAN --}}
                    <table id="table-4" style="display: none">
                        <thead>
                            <tr class="tabel-head">
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pekerjaan as $item)
                            <tr>
                                <td>{{ $item->work }}</td>
                                <td>{{ number_format($item->total, 0, '.', '.') }}</td>
                                <td>{{ number_format(($item->total / $totalPekerjaanAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="tabel-foot">
                                <td>Total</td>
                                <td>{{ number_format($totalPekerjaanAll, 0, '.', '.') }}</td>
                                <td>{{ number_format(($totalPekerjaanAll / $totalPekerjaanAll) * 100, 1)}} &#40;%&#41;
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- PENGHASILAN --}}
                    <table id="table-5" style="display: none">
                        <thead>
                            <tr class="tabel-head">
                                <th scope="col">Penghasilan/Tahun</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penghasilan as $item)
                            <tr>
                                <td>{{ $item->income }}</td>
                                <td>{{ number_format($item->total, 0, '.', '.') }}</td>
                                <td>{{ number_format(($item->total / $totalPenghasilanAll) * 100, 1)}} &#40;%&#41;</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="tabel-foot">
                                <td>Total</td>
                                <td>{{ number_format($totalPenghasilanAll, 0, '.', '.') }}</td>
                                <td>{{ number_format(($totalPenghasilanAll / $totalPenghasilanAll) * 100, 1)}}
                                    &#40;%&#41;</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var selectTable = document.querySelector('.form-select'); // Ambil elemen <select>
    var table1 = document.getElementById('table-1');
    var table2 = document.getElementById('table-2');
    var table3 = document.getElementById('table-3');
    var table4 = document.getElementById('table-4');
    var table5 = document.getElementById('table-5');

    selectTable.addEventListener('change', function () {
        var selectedValue = selectTable.value;

        console.log(selectedValue);
        if (selectedValue === "1") {
            table1.style.display = "table";
            table2.style.display = "none";
            table3.style.display = "none";
            table4.style.display = "none";
            table5.style.display = "none";
        } else if (selectedValue === "2") {
            table1.style.display = "none";
            table2.style.display = "table";
            table3.style.display = "none";
            table4.style.display = "none";
            table5.style.display = "none";
        } else if (selectedValue === "3") {
            table1.style.display = "none";
            table2.style.display = "none";
            table3.style.display = "table";
            table4.style.display = "none";
            table5.style.display = "none";
        } else if (selectedValue === "4") {
            table1.style.display = "none";
            table2.style.display = "none";
            table3.style.display = "none";
            table4.style.display = "table";
            table5.style.display = "none";
        } else if (selectedValue === "5") {
            table1.style.display = "none";
            table2.style.display = "none";
            table3.style.display = "none";
            table4.style.display = "none";
            table5.style.display = "table";
        }
    });

</script>


@endsection
