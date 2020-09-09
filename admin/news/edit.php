<?php
$id=$_GET['id'];
$result=showeditnews($id);

if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $oldpic=$result['img'];
    editnews($data,$id,'img',$oldpic);
    header("location:dashbord.php?m=news&p=list");
}
?>
<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8"><?php echo $result['text']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[news_cat]">
                            <?php
                            $cat=newscat();
                            foreach ($cat as $val){
                                echo "<option value=\"$val[id]\" ";
                                if($result['news_cat']==$val['id']){
                                    echo " selected";
                                }
                                echo ">$val[title] </option>";
                            }
                            ?>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $result['img']; ?>" width="60" />
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

