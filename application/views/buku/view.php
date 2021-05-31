<div class="h2"><?php echo $title; ?></div>


<div class="card bg-light mb-3" style="max-width: 50rem;">
    <div class="card-header h3 d-flex justify-content-between"><?=$data->judul ?><small><?=$data->pengarang ?></small></div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><em>Penerbit:</em>         <span><?=$data->penerbit ?></span></li>
            <li class="list-group-item d-flex justify-content-between"><em>Tanggal Terbit:</em>   <span><?=$data->tglterbit ?></span></li>
            <li class="list-group-item d-flex justify-content-between"><em>ISBN:</em>             <span><?=$data->isbn ?></span></li>
        </ul>
    </div>
</div>

