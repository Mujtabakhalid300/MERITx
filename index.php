<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>meritChecker</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="index.js" />
  </head>
  <body>
    <header>
      <label class="logo">MERITx</label>
      <nav class="nav">
        <ul class="navlist">
          <li><a href="nust.html">NUST</a></li>
          <li><a href="mdcat.html">MDCAT</a></li>
          <li><a href="ecat.html">ECAT</a></li>
          <li><a href="comsats.html">COMSATS</a></li>
          <li><a href="about.html" class="active">ABOUT</a></li>
        </ul>
      </nav>
      <div class="wrapper-hamburger">

        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
      </div>
    </header>
    <section>
      <div class="container-1">
        <h1 class="heading-1">Merit calculator</h1>
        <p class="para-1">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quas
          sit nostrum maiores voluptatum! Illo id fuga similique, libero et
          autem nemo nisi, mollitia reiciendis, quas voluptas? Laboriosam illo
          saepe consectetur harum ea nesciunt distinctio, mollitia quasi
          obcaecati? Eius reiciendis et rem Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Expedita ab commodi vero at? Soluta
          facilis exercitationem inventore corrupti odio, quibusdam ea sunt sit,
          culpa corporis quae reiciendis quaerat eos non fugiat incidunt ipsum.
          Aliquid, corporis alias? Ex illo repellat rem aspernatur a molestiae
          consectetur, dignissimos, sunt consequuntur optio dolores commodi
          neque beatae iste qui culpa odit eum? culpa sapiente tempore!
        </p>
      </div>
    </section>
    <section>
        <div class="container-2">
            <form class="form-1" method="get" action="">
                <div class="form-input" >
                    <label class="text-align">Enter your FSC Marks: </label>
                    <input class="input-1" id="FSCmarks" type="text" name="email" value="" placeholder="FSC Marks">
                </div>
                <div class="form-input">
                    <label class="text-align">Enter your Entry test Percentage: </label>
                    <input  class="input-1" id="entrytest" type="text" name="email" value="" placeholder="Entry Test Percentage">
                </div>
                <div class="btn-wrapper">
                    <button class="btn-1" type="button" >Submit</button>
                </div>
                
            </form>
            <div class="result">
                <h1 class="heading-1">
                    RESULT
                </h1>
                <p class="para-1 percentageValue">
                    Hello World
                </p>
            </div>
        </div>
    </section>
    <script src="index.js"></script>
  </body>
</html>
