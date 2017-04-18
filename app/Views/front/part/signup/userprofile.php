<div class="container" id="step2">
            
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1>Je complète mon profil utilisateur</h1>
            <p>Veuillez renseigner les champs ci-dessous:</p>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-offset-2 col-md-7">
            <div class="form-group">
                <label for="companyname">Nom de l'entreprise:</label>
                <input type="text" name="company_name"  class="form-control" placeholder="Nom de l'entité" id="companyname" required/>
            </div>
        </div>
    </div>
                    
    <div class="row">
        <div class="col-md-offset-2 col-md-7">
            <div class="form-group">
                <label for="companydescription">Description:</label>
                <textarea class="form-control" rows="5" name="company_description" placeholder="Veuillez décrire votre activité et vos motivations." id="companydescription"></textarea>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-offset-2 col-md-7">
            <div class="form-group">
                <!-- <label for="companylogo">Télécharger le logo de l'entreprise</label> -->
                <!-- <input type="file" class="form-control-file" id="companylogo" aria-describedby="fileHelp"> -->
                <div class="container">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <div class="action">
        <input type="file" id="file" style="float:left; width: 250px">
        <input type="button" id="btnCrop" value="Crop" style="float: right">
        <input type="button" id="btnZoomIn" value="+" style="float: right">
        <input type="button" id="btnZoomOut" value="-" style="float: right">
    </div>
    <div class="cropped">

    </div>
</div>

<script src="../require.js"></script>
<script>
    require.config({
        baseUrl: "../",
        paths: {
            jquery: 'jquery-1.11.1.min',
            cropbox: 'cropbox'
        }
    });
    require( ["jquery", "cropbox"], function($) {
        var options =
        {
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: 'avatar.png'
        }
        var cropper = $('.imageBox').cropbox(options);
        $('#file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = $('.imageBox').cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $('#btnCrop').on('click', function(){
            var img = cropper.getDataURL();
            console.log(img);
            $('.cropped').append('<img src="'+img+'">');
        })
        $('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        $('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
        }
    );
</script>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-offset-2 col-md-7">
            <div class="form-group">
                <label for="companylink">Le site de votre société:</label>:</label>
                <input type="url" name="company_link" class="form-control" placeholder="Veuillez saisir l'URL de votre entité." id="companylink" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="team_hashtag">Hashtag :</label>
                <input type="text" name="team_hashtag"  class="form-control" id="team_hashtag" required />
            </div>
        </div>
    </div>
        
</div>


