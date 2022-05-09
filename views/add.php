<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap -->

  <div class="container content mt-3">

<h1 id="addTitle">Product Add</h1>
<form id="product_form" action="/haileyesus.belew.com/addToDB.php" method="post" onload="onloads()">
    
  <div class="Cutter">
 
    <div class="cut" style="width: 55%">
   
      <!-- SKU INPUT -->
      <div class="mb-3 mt-3 ">
        <label for="text" class="form-label ">SKU:</label>
        <input required type="text" class="form-control"  id="sku" placeholder="Enter SKU Code" name="sku">
      </div>

      <!-- NAME INPUT -->
      <div class="mb-3">
        <label for="Name" class="form-label">Product Name:</label>
        <input required type="text" class="form-control" id="name" placeholder="Enter product name" name="name">
      </div>

      <!-- PRICE INPUT -->
      <div class="mb-3 mt-3">
        <label for="text" class="form-label">Price in $:</label>
        <input required type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
      </div>

      <!-- Type Picker -->
      <div class="mb-3 mt-3">
          <select id="productType"  onchange="switchFormBlock(this)"  name="productType" class="dropdown btn btn-dark dropdown-toggle">
            <option class="dropdown-item text-light" value="null" >Choose option</option>
          <option class="dropdown-item text-light" value="0" >Furniture</option>
          <option class="dropdown-item text-light" value="1" >Book</option>
          <option class="dropdown-item text-light" value="2" >DVD</option>
        </select>
      </div>
      <!-- end Type Picker -->
    </div>
    <div class="cut">
        <div id="DefaultInputs"display-style="none">
            
        </div>

      <div id="FurnituresInputs"display-style="none" style="width: 55%">
        <!-- Height INPUT -->
        <div class="mb-3 mt-3">
          <label for="Height" class="form-label">Height in CM:</label>
          <input type="number" class="form-control" id="height" placeholder="Enter height" name="height" value="0">
        </div>
        <!-- Width INPUT -->
        <div class="mb-3 mt-3">
          <label for="Width" class="form-label">Width in CM:</label>
          <input type="number" class="form-control" id="width" placeholder="Enter Width" name="width" value="0">
        </div>
        <!-- Length INPUT -->
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Length in CM:</label>
          <input type="number" class="form-control" id="length" placeholder="Enter length" name="length" value="0">
        </div>
         <div class="mb-3 mt-3">
             <label for="text" class="form-label" style="font-size: 20px"><b>Please, Provide height, Width, length for the  furniture</b></label>
          
        </div>
      </div>

      <div id="BookInputs" display-style="none" style="width: 55%">
        <!-- Weight INPUT -->
        <div class="mb-3 mt-3" >
          <label for="text" class="form-label">Weight in KG:</label>
          <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight" value="0">
        </div>
        
         <div class="mb-3 mt-3">
             <label for="text" class="form-label" style="font-size: 20px"><b>Please, Provide weight space in KG</b></label>
          
        </div>
      </div>

      <div id="DvdInputs" style="width: 55%">
        <!-- Size INPUT -->
        <div class="mb-3 mt-3">
          <label for="DvD" class="form-label">Size in MB:</label>
          <input type="number" class="form-control" id="size" placeholder="Enter DVD size" name="size" value="0">
          <br><!-- comment -->
          <h4></h4>
        </div>
        
         <div class="mb-3 mt-3">
             <label for="text" class="form-label" style="font-size: 20px"><b>Please, Provide disk space in MB</b></label>
          
        </div>
        
      </div>
    </div>
  </div>

    <button id="Save" type="submit" name="Save" class="btn btn-success">Save</button>
  <button type="button" name="cancel" class="btn btn-danger">Cancel</button>

</form>
<script src="../JS/SwapFormblock.js" charset="utf-8"></script>
</div>