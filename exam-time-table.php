<?php include 'includes/header.php'; ?>
<style>
    

/* container */

.schedule{
    max-width:1200px;
    margin:auto;
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.08);
}

h2{
    margin-bottom:20px;
}

/* responsive wrapper */

.table-wrapper{
    overflow-x:auto;
}

.table{
    display:grid;
    grid-template-columns:120px repeat(7,1fr);
    min-width:900px;
}

.cell{
    border:1px solid #e3e3e3;
    padding:15px;
    min-height:90px;
    font-size:14px;
    display:flex;
    align-items:center;
}

.header{
    background:#f0f1f5;
    font-weight:bold;
    justify-content:center;
}

.time{
    background:#f7f7f7;
    font-weight:bold;
}

/* subject cards */

.subject{
    border-radius:8px;
    display:block;
}

/* subject colors */

.math{background:#d9e6ff;border:1px solid #7aa7ff;}
.physics{background:#ffe6d6;border:1px solid #ff9f66;}
.bio{background:#e1f3e8;border:1px solid #62c48a;}
.english{background:#e6f4ea;border:1px solid #66bb6a;}
.chem{background:#fde2e2;border:1px solid #ff6b6b;}
.history{background:#ebe6ff;border:1px solid #8b7bff;}

.subject b{
    display:block;
    margin-bottom:4px;
}

.empty{
    color:#aaa;
    justify-content:center;
}

</style>
    <!-- About Section Home Four -->
    <section class="bredcum_out">
      <div class="container">
        <div class="bredcum-cnt text-center">
          <p>TIME TABLE</p>
          <h2>
          Sreepaada Degree College <br> Institute of Management
          </h2>
        </div>
      </div>
    </section>


<div class="schedule">

<h2>Exam Time Table</h2>

<div class="table-wrapper">

<div class="table">

<div class="cell header">Time</div>
<div class="cell header">Monday</div>
<div class="cell header">Tuesday</div>
<div class="cell header">Wednesday</div>
<div class="cell header">Thursday</div>
<div class="cell header">Friday</div>
<div class="cell header">Saturday</div>
<div class="cell header">Sunday</div>

<!-- Row 1 -->

<div class="cell time">09:00 - 10:00</div>

<div class="cell subject math">
<div>
<b>Mathematics</b>
Algebra and Geometry
</div>
</div>

<div class="cell subject physics">
<div>
<b>Physics</b>
Physics Lab
</div>
</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

<div class="cell subject bio">
<div>
<b>Biology</b>
Cell Biology
</div>
</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

<!-- Row 2 -->

<div class="cell time">10:00 - 11:00</div>

<div class="cell subject english">
<div>
<b>English</b>
Literature & Grammar
</div>
</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

<div class="cell subject chem">
<div>
<b>Chemistry</b>
Organic Chemistry
</div>
</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

<!-- Row 3 -->

<div class="cell time">11:00 - 12:00</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

<div class="cell subject history">
<div>
<b>History</b>
World History
</div>
</div>

<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>
<div class="cell empty">Click to add</div>

</div>

</div>

</div>





    <?php include 'includes/footer.php'; ?>