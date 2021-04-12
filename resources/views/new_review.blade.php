<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>new_review</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
            <h1>ADD COMMENT</h1>
          </div>
          <div class="card-body" style="max-width: 50px;">
            <form method="POST" action="/anime/{id}">
              @csrf
              <div class="form-group">
                <label for="new-review">Ecrit une Critique</label>
                <input type="text" name="comment" id="comment" style="width: 30rem; height: 10rem;">
                <input type="number" name="rating" min="0" max="10" style="width: 5rem;">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              <ul>
                @foreach ($reviews as $item)
                <li> {{$item->username}} - {{$item->rating}}/10 - {{$item->comment}} -
                  {{$item->updated_at}}
                </li>
                @endforeach
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>