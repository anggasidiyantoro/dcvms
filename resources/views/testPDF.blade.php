<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF From View</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
        }
        .judul {
            font-weight: bold;
            font-size: 24px;
        }
        td {
            padding-left: 5px;
            font-size: 14px;
        }
        h3, p {
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 1px;
            margin-top: 1px;
        }

        #myTable tr td:first-child {
            width: 5%;
        }
        #myTable tr td:nth-child(2) {
            width: 25%;
        }
        #myTable tr td:nth-child(3) {
            width: 30%;
        }
        #myTable tr td:nth-child(4) {
            width: 22%;
        }
        #myTable tr td:last-child {
            width: 18%;
        }
        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>
    <table style="width: 100vw;">
        <tr>
            <th style="padding-top: 5px;padding-bottom: 5px;"><img src="assets/images/logo-biznet.jpg" alt=""></th>
            <th class="judul">Data Center Authorization<br>Form</th>
            <th>BIZ/DC/DCT/Form006</th>
        </tr>
        <tr>
            <td>Version:2.0</td>
            <td>Effective Date: 18 November 2021</td>
            <td>Page 1 of 2</td>
        </tr>
        <tr>
            <td colspan="3">Classification: Public</td>
        </tr>
    </table>
    <br>
    <br>
    <h3>Applicant</h3>
    <table style="width: 100vw; table-layout: fixed;">
        <tr>
            <td>
                <p style="font-weight: bold;">Nama Super User</p>
                <p style="font-style: italic;">Super User Name</p>
            </td>
            <td colspan="3">
                <p style="font-size: 16px;">Moch. Jurmansyah</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-weight: bold;">Jabatan</p>
                <p style="font-style: italic;">Position</p>
            </td>
            <td colspan="3">
                <p style="font-size: 16px;">CTO</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-weight: bold;">Nama Perusahaan</p>
                <p style="font-style: italic;">Company Name</p>
            </td>
            <td colspan="3">
                <p style="font-size: 16px;">PT. Semut Data Indonesia</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-weight: bold;">Tanggal Aktivasi</p>
                <p style="font-style: italic;">Activation Date</p>
            </td>
            <td colspan="3">
                <p style="font-size: 16px;">24 April 2022</p>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <h3>Visitors</h3>
    <table id="myTable" style="width: 100vw;">
        <tr>
            <td>
                <p>No</p>
            </td>
            <td>
                <p style="font-weight: bold;">Nama</p>
                <p style="font-style: italic;">Name</p>
            </td>
            <td>
                <p style="font-weight: bold;">Perusahaan</p>
                <p style="font-style: italic;">Company</p>
            </td>
            <td>
                <p style="font-weight: bold;">KTP / ID</p>
                <p style="font-style: italic;">ID</p>
            </td>
            <td>
                <p style="font-weight: bold;">Telepon</p>
                <p style="font-style: italic;">Telephone</p>
            </td>
        </tr>
        <tr style="text-align: center;">
            <td>1</td>
            <td style="text-align: left;">Angga Sidiyantoro</td>
            <td>PT. Semut Data Indonesia</td>
            <td>3201263110960002</td>
            <td>085714269969</td>
        </tr>
        <tr>
            <td><p style="color: white;">a</p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
        </tr>
        <tr>
            <td><p style="color: white;">a</p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
        </tr>
        <tr>
            <td><p style="color: white;">a</p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
        </tr>
        <tr>
            <td><p style="color: white;">a</p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
        </tr>
        <tr>
            <td><p style="color: white;">a</p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
            <td><p></p></td>
        </tr>
    </table>
    <br>
    <h3>Authorization</h3>
    <table style="width: 100vw;">
        <tr>
            <th style="width: 30%">
                <p style="font-weight: bold; font-size: 13px;">Pemohon,</p>
                <p style="font-style: italic; font-size: 13px;">Applicant,</p>
            </th>
            <th>
                <p style="font-weight: bold; font-size: 13px;">Diketahui oleh,</p>
                <p style="font-style: italic; font-size: 13px;">Acknowledge by,</p>
            </th>
            <th>
                <p style="font-weight: bold; font-size: 13px;">Disetujui oleh,</p>
                <p style="font-style: italic; font-size: 13px;">Approved by,</p>
            </th>
        </tr>
        <tr>
            <td>
                <img src="assets/images/ttd-cap.jpg" style="width: 100%;" alt="">
                <p style="text-align: center; font-size: 12px;">(please complete with company<br>
                stamp here)</p>
            </td>
            <td>
                <p style="text-align: center; font-size: 12px; margin-top: 75px;">(diisi oleh security data center)</p>
            </td>
            <td>
                <p style="text-align: center; font-size: 12px; margin-top: 75px;">(diisi oleh security data center)</p>
            </td>
        </tr>
        <tr>
            <td>
                <table style="border: 0px solid white !important;">
                    <tr>
                        <td style="border: 0px solid white !important;">
                            <p style="font-weight: bold; font-size: 13px;">Tanggal</p>
                            <p style="font-style: italic; font-size: 13px;">Date</p>
                        </td>
                        <td style="border: 0px solid white !important;">
                            <p>06 April 2022</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <p style="font-weight: bold; font-size: 13px;">Tanggal</p>
                <p style="font-style: italic; font-size: 13px;">Date</p>
            </td>
            <td>
                <p style="font-weight: bold; font-size: 13px;">Tanggal</p>
                <p style="font-style: italic; font-size: 13px;">Date</p>
            </td>
        </tr>
        <tr>
            <td>
                <table style="border: 0px solid white !important;">
                    <tr>
                        <td style="border: 0px solid white !important;">
                            <p style="font-weight: bold; font-size: 13px;">Nama</p>
                            <p style="font-style: italic; font-size: 13px;">Name</p>
                        </td>
                        <td style="border: 0px solid white !important; padding-left: 20px">
                            Moch. Jurmansyah
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <p style="font-weight: bold; font-size: 13px;">Nama</p>
                <p style="font-style: italic; font-size: 13px;">Name</p>
            </td>
            <td>
                <p style="font-weight: bold; font-size: 13px;">Nama</p>
                <p style="font-style: italic; font-size: 13px;">Name</p>
            </td>
        </tr>
    </table>
    <br>
    <h3>Note</h3>
    <table style="width: 100vw;">
        <tr>
            <td><h1 style="color: white !important; font-size: 48px;">A</h1></td>
        </tr>
    </table>

    <div class="page-break"></div>

    <table style="width: 100vw;">
        <tr>
            <th style="padding-top: 5px;padding-bottom: 5px;"><img src="assets/images/logo-biznet.jpg" alt=""></th>
            <th class="judul">Data Center Authorization<br>Form</th>
            <th>BIZ/DC/DCT/Form006</th>
        </tr>
        <tr>
            <td>Version:2.0</td>
            <td>Effective Date: 18 November 2021</td>
            <td>Page 2 of 2</td>
        </tr>
        <tr>
            <td colspan="3">Classification: Public</td>
        </tr>
    </table>
    <br>
    <br>
    <h3>Information</h3>
    <table style="width: 100vw;">
        <tr>
            <td>
                Visitors must be accompanied by a Biznet Representative with the proper authorization prior to accessing any other area within the Data Center.
            </td>
            <td>
                Pengunjung wajib didampingi oleh staff Biznet dan telah mendapat izin tertulis resmi sebelum dapat memasuki area Data Center.
            </td>
        </tr>
        <tr>
            <td>
                Visitors agree to comply with the Data Center Rules Regulation, Policies and Procedures.
            </td>
            <td>
                Pengunjung setuju untuk mematuhi Peraturan, Kebijakan, dan Prosedur Data Center.
            </td>
        </tr>
        <tr>
            <td>
                Visitors are not allowed to bring any flammable or combustible materials, hazardous or toxic materials, food, beverages, and any kind of weapon in to the Data Center
            </td>
            <td>
                Pengunjung tidak diperbolehkan membawa bahan yang mudah terbakar, bahan berbahaya atau beracun, makanan, minuman, dan segala jenis senjata ke dalam Data Center
            </td>
        </tr>
    </table>
</body>
</html>