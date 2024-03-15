function dataPerson() {
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hobby = forms.hobby.value; 

    let hasilElement = document.getElementById('hasil');
    hasilElement.innerHTML = `
        <p>Nama: ${nama}</p>
        <p>Pekerjaan: ${pekerjaan}</p>
        <p>Hobby: ${hobby}</p>
    `;
}
