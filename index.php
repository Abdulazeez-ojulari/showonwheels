<?php include'includes/header1.php' ?>
      <title>Show On Wheels</title> 
      <?php include'includes/header2.php' ?>

      <form>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Search..."
          />
        </div>

        <button type="submit" class="btn" id="search">
          Search a movie
        </button>
      </form>

      <div id="movies-searchable"></div>
      <div id="movies-container"></div>

    <script src="./js/apiTransaction.js"></script>
    <script src="./js/app.js"></script>

  <?php include'includes/footer.php' ?>