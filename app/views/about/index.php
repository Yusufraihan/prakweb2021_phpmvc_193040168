<div class="container">

    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h1>About Me</h1>
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <img src="<?= BASEURL; ?>/img/profile.jpg" alt="Yusuf" width ="200" class="rounded-circle ">
        <p>Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur'] ?>, saya adalah seorang <?= $data['pekerjaan'] ?>. </p>
        </div>
        </div>
    </div>
</div>



    
