let dataPegawai = [];
let tabel = document.getElementById('dataPegawai');
let totalGaji = 0;

function tambahPegawai() {
    let nama = document.getElementById('nama').value;
    let jabatan = document.getElementById('jabatan').value;
    let status = document.getElementById('status').value;
    let gaji = parseInt(document.getElementById('gaji').value);

    let tunjanganJabatan = 0.15 * gaji;
    let bpjs = 0.1 * gaji;
    let tunjanganKeluarga = (status === "menikah") ? 0.2 * gaji : 0;
    let total = gaji + tunjanganJabatan - bpjs + tunjanganKeluarga;
    totalGaji += total;

    let pegawai = {
        nama: nama,
        jabatan: jabatan,
        status: status,
        gaji: gaji,
        tunjanganJabatan: tunjanganJabatan,
        bpjs: bpjs,
        tunjanganKeluarga: tunjanganKeluarga,
        total: total
    };

    dataPegawai.push(pegawai);

    renderTabel();
    tampilkanData(pegawai);
}

function renderTabel() {
    tabel.innerHTML = '';
    dataPegawai.forEach(pegawai => {
        let row = `
            <tr>
                <td>${pegawai.nama}</td>
                <td>${pegawai.jabatan}</td>
                <td>${pegawai.status}</td>
                <td>${pegawai.gaji}</td>
                <td>${pegawai.tunjanganJabatan}</td>
                <td>${pegawai.bpjs}</td>
                <td>${pegawai.tunjanganKeluarga}</td>
                <td>${pegawai.total}</td>
            </tr>
        `;
        tabel.innerHTML += row;
    });

    document.getElementById('totalGaji').textContent = totalGaji;
}

function tampilkanData(pegawai) {
    swal({
        title: "Data Pegawai",
        text: `
            Nama Pegawai : ${pegawai.nama}\n
            Jabatan : ${pegawai.jabatan}\n
            Status : ${pegawai.status}\n
            Gaji Pokok : ${pegawai.gaji}\n
            Tunjangan Jabatan : ${pegawai.tunjanganJabatan}\n
            BPJS : ${pegawai.bpjs}\n
            Tunjangan Keluarga : ${pegawai.tunjanganKeluarga}\n
            Total Gaji : ${pegawai.total}\n
        `,
        icon: "success",
    });
}
