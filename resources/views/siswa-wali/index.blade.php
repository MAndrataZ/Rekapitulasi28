@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Leger</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('siswa-wali.index') }}">Siswa</a></li>
                <li class="breadcrumb-item active">Siswa</li>
            </ol>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            List Siswa
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">NIS</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">8</th>
                    <th colspan="11">Mapel</th>
                </tr>
                <tr>
                    <th>B.Indonesia</th>
                    <th>B.Inggris</th>
                    <th>B.Sunda</th>
                    <th>Matematika</th>
                    <th>PAI</th>
                    <th>PKN</th>
                    <th>IPA</th>
                    <th>IPS</th>
                    <th>PLH</th>
                    <th>TIK</th>
                    <th>Penjas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>191379813</td>
                    <td>Asep</td>
                    <td>A</td>
                    <td>88</td>
                    <td>74</td>
                    <td>92</td>
                    <td>85</td>
                    <td>76</td>
                    <td>67</td>
                    <td>95</td>
                    <td>83</td>
                    <td>79</td>
                    <td>69</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>191379890</td>
                    <td>Udin</td>
                    <td>A</td>
                    <td>94</td>
                    <td>71</td>
                    <td>85</td>
                    <td>78</td>
                    <td>82</td>
                    <td>65</td>
                    <td>99</td>
                    <td>86</td>
                    <td>91</td>
                    <td>80</td>
                    <td>77</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1913798095</td>
                    <td>Tuti</td>
                    <td>A</td>
                    <td>78</td>
                    <td>92</td>
                    <td>87</td>
                    <td>66</td>
                    <td>89</td>
                    <td>94</td>
                    <td>73</td>
                    <td>84</td>
                    <td>95</td>
                    <td>71</td>
                    <td>99</td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#confirmationModal">Kirim Leger ke Kurikulum</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda ingin mengirim nilai ke kurikulum?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="sendToKurikulum()">Kirim</button>
            </div>
        </div>
    </div>
</div>

<script>
    function sendToKurikulum() {
        // Logic to send the data to the curriculum
        alert("Nilai berhasil dikirim ke kurikulum.");
        $('#confirmationModal').modal('hide');
    }
</script>
@endsection
