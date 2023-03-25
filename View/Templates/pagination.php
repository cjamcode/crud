<div class="container d-flex justify-content-center mt-5">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php for ($i=1; $i < $pagination ; $i++):?>
        <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
    <?php endfor;?>
  </ul>
</nav>
</div>

