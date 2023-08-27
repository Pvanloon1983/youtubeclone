<?php

class VideoDetailsFormProvider {

  private $con;

  public function __construct($con)
  {
    $this->con = $con;
    // Sets the variable con
  }

  public function createUploadForm() {
    $fileInput = $this->createFileInput();
    $titleInput = $this->createTitleInput();
    $descriptionInput = $this->createDescriptionInput();
    $privacyInput = $this->createPrivacyInput();
    $categoriesInput = $this->createCategoriesInput();
    $uploadButton = $this->createUploadButton();
    return "<form action='processing.php' method='POST'>
            $fileInput
            $titleInput
            $descriptionInput
            $privacyInput
            $categoriesInput
            $uploadButton
            </form>";
  }

  private function createFileInput() {
    return "<div class='form-group'>    
    <input name='fileInput' type='file' class='form-control-file' id='exampleFormControlFile1' required>
    </div>";
  }

  private function createTitleInput() {
    return "<div class='form-group'><input name='titleInput' class='form-control' type='text' placeholder='Title'></div>";
  }

  private function createDescriptionInput() {
    return "<div class='form-group'><textarea name='descriptionInput' class='form-control' placeholder='Description' rows='4'></textarea></div>";
  }

  private function createPrivacyInput() {
    return "<div class='form-group'>
    <select name='privacyInput' class='form-control'>
      <option value='0'>Private</option>
      <option value='1'>Public</option>
      </select>
    </div>";
  }

  private function createCategoriesInput(){
    $query = $this->con->prepare("SELECT * FROM categories");
    $query->execute();

    $html = "<div class='form-group'>
            <select name='categoryInput' class='form-control'>";
    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $name = $row["name"];
      $id = $row["id"];
      $html .= "<option value='$id'>$name</option>";
    }

    $html .= "</select>
    </div>";

    return $html;
  }

  private function createUploadButton(){
    return "<button class='btn btn-primary' type='submit' name='uploadButton'>Upload</button>";
  }
}

?>