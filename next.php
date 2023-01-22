  <style>
    .pagination {
      border: 1px solid red;
      margin: auto;
      align-items: center;
      justify-content: center;
      position: relative;
      background: #fff;
      width: 230px;
      display: flex;
      padding: 10px 20px;
      border-radius: 50px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .pageNumber {
      list-style: none;
      line-height: 50px;
      margin: 0 5px;
    }

    .pageNumber {
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
    }

    .nextpage-anchor {
      display: block;
      text-decoration: none;
      color: #777;
      font-weight: 600;
      border-radius: 50%;
    }

    .pageNumber:hover .nextpage-anchor,
    .pageNumber.active .nextpage-anchor {
      background: #333;
      color: #fff;
    }

    .pageNumber:first-child {
      margin-right: 30px;
      font-weight: 700;
      font-size: 20px;
    }

    .pageNumber:last-child {
      margin-left: 30px;
      font-weight: 700;
      font-size: 20px;
    }
  </style>
  <div class="nextpage-navigation" style="margin-bottom: 50px;">
    <ul class="pagination">
      <li class="pageNumber active"><a href="" class="nextpage-anchor">1</a></li>
      <li class="pageNumber"><a href="" class="nextpage-anchor">2</a></li>
      <li class="pageNumber"><a href="" class="nextpage-anchor">3</a></li>
      <!-- <li class="pageNumber"><a href="">4</a></li>
        <li class="pageNumber"><a href="">5</a></li>
        <li class="pageNumber"><a href="">6</a></li> -->
    </ul>
  </div>