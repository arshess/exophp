<?php 
ob_start();
?>
    <h1 class="my-3 fw-bold">Formulaire qui déchire</h1>
    <form action="./index.php" method="post" class="p-3 shadow">
    <h2>T'es qui ?</h2>
        <div class="input-group">
            <label class="col-12 col-md-2" for="inputFirstName"><span class="input-group-text">Prénom :</span></label>
            <input type="text" id="inputFirstName" maxlength="50" name="inputFirstName" value="<?=$input['FirstName']?>" class="form-control <?=$Validate['FirstName']?>">
            <label class="col-12 col-md-2" for="inputLastName"><span class="input-group-text">Nom :</span></label>
            <input type="text" id="inputLastName" maxlength="50" name="inputLastName" value="<?=$input['LastName']?>" class="form-control <?=$Validate['LastName']?>">
        </div>
        
        <div class="input-group">
            <label class="" for="inputBirthDay"><span class="input-group-text">Date de naissance :</span></label>
            <input type="date" validationMessage="test" id="inputBirthDay" name="inputBirthDay" value="<?=$input['BirthDay']?>" class="form-control <?=$Validate['BirthDay']?>">
        </div>
        <div class="input-group">
            <label class="" for="inputCountry"><span class="input-group-text">Pays de naissance :</span></label>
            <select name="inputCountry" id="inputCountry" class=" nes-select form-select <?=$Validate['BirthPlace']?>" id="">
                <?php foreach($countries as $country){ ?>
                    <option <?= $input['BirthPlace']==$country?"selected":"" ;?> value="<?=$country ?>"><?=$country ?></option>
                <?php } ?>;
                </select>
                </div>
        <div class="input-group">
            <label class="" for="inputNationalite"><span class="input-group-text">Nationnalité :</span></label>
            <input type="text" id="inputNationalite" maxlength="50" name="inputNationalite" value="<?=$input['Nationnalite']?>" class="form-control <?=$Validate['Nationnalite']?> col-3">
        </div>
        <h2>Adresse :</h2>
        <div class="input-group">
            <label class="col-12 col-md-2" for="inputNumRue"><span class="input-group-text">Numéro :</span></label>
            <input type="text" id="inputNumRue" maxlength="6" value="<?=$input['NumRue']?>" name="inputNumRue" class="form-control  <?=$Validate['NumRue']?>">
            <label  for="inputRue"><span class="input-group-text">Rue :</span></label>
            <input type="text" id="inputRue" maxlength="50" value="<?=$input['Rue']?>" name="inputRue" class="form-control <?=$Validate['Rue']?>">
        </div>
        <div class="input-group">
            <label class="col-12 col-lg-2" for="inputCP"><span class="input-group-text" >Code Postal :</span></label>
                <input type="text" id="inputCP" value="<?=$input['CP']?>" name="inputCP" maxlength="5" class="form-control <?=$Validate['CP']?>">
            <label  class="col-12 col-md-3" for="inputCity"><span class="input-group-text">Ville :</span></label>
                <input type="text" id="inputCity" maxlength="100" value="<?=$input['City']?>" name="inputCity" class="form-control <?=$Validate['City']?>">
        </div>
        <h2>Contact :</h2>
        
        <div class="input-group">
            <label  class="col-12 col-md-3"  for="inputMail">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i>&nbsp;Courriel :</span>
            </label>
            <input type="email" id="inputMail" value="<?=$input['Mail']?>" name="inputMail" placeholder="example@example.com" class="form-control <?=$Validate['Mail']?>">
        </div>
        
        <div class="input-group">
            <label  class="col-12 col-md-3" for="inputPhone">
                <span class="input-group-text" ><i class="bi bi-telephone-fill"></i>&nbsp;Téléphone :</span>
            </label>
            <input type="tel" id="inputPhone" value="<?=$input['Phone']?>" placeholder="0X-XX-XX-XX-XX" name="inputPhone" class="form-control <?=$Validate['Phone']?>" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
        </div>        
        <h2>Diplômes :</h2>
        <div class="input-group">
            <label for="inputDiplome"><span class="input-group-text" >Diplôme :</label></span>
            <select name="inputDiplome" id="inputDiplome" class="form-select  <?=$Validate['Diplome']?>"">
                <option <?= $input['Diplome']=="0"?"selected":"" ;?> value="0">Sans diplômes</option>
                <option <?= $input['Diplome']=="1"?"selected":"" ;?> value="1">Baccalauréat</option>
                <option <?= $input['Diplome']=="2"?"selected":"" ;?> value="2">Bac +2 ou équivalent</option>
                <option <?= $input['Diplome']=="3"?"selected":"" ;?> value="3">Bac +3 ou supérieur</option>
            </select>
      </div>
      <h2>Pôle Emploi : </h2>
        <div class="input-group">
        <label for="inputAnpe"><span class="input-group-text" >Identifiant Pôle Emploi :</span></label>
        <input type="text" id="inputAnpe" value="<?=$input['Anpe']?>" name="inputAnpe" maxlength="10"class="form-control <?=$Validate['Anpe']?>">
        </div>
        <h2>Infos Codecademy :</h2>
        <div class="input-group">
            <label lass="col-12 col-lg-2" for="inputCodecAdemy"><span class="input-group-text">Lien profil :</span></label>
            <input type="url" title="Lien de votre profile CodecAdemy" id="inputCodecAdemy" placeholder="https://www.codecademy.com/profiles/votreprofil" value="<?=$input['CodecAdemy']?>" name="inputCodecAdemy" class="form-control <?=$Validate['CodecAdemy']?>">
            </div>
            <div class="input-group">
            <label for="inputBadgeCodec"><span class="input-group-text" >Nombre de badges :</span></label>
            <input type="number" id="inputBadgeCodec" value="<?=$input['BadgeCodec']?>" name="inputBadgeCodec" class="form-control <?=$Validate['BadgeCodec']?>">        
        </div>
        <h2>Divers :</h2>
        <label for="inputSuperHero"><h5>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? :</h5></label>
        <textarea name="inputSuperHero" id="inputSuperHero" cols="30"  class="form-control <?=$Validate['SuperHero']?>" rows="5"><?=$input['SuperHero']?></textarea>
        <label for="inputHack"><h5>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</h5></label>
        <textarea name="inputHack" id="inputHack" cols="30"  class="form-control <?=$Validate['Hack']?>" rows="5"><?=$input['Hack']?></textarea>
        <label for="inputexpe"><h5>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</h5></label>
        
        <div class="form-check">
            <input type="radio" id="inputExpY" name="inputExp" value="1" <?= ($input['Exp']=="1"||$input['Exp']=="Caramba")?" checked ":"";?> class="form-check-input <?=$Validate['Exp']?>">
            <label class="form-check-label" for="inputExpY">
                Oui
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="inputExp" id="inputExpN" value="0" <?= ($input['Exp']=="0")?" checked ":"";?>  class="form-check-input <?=$Validate['Exp']?>">
            <label class="form-check-label" for="inputExpN">
                Non
            </label>
        </div>
        <input class="btn col-6 offset-md-7 col-md-3 btn-submit " type="submit" name="submit" value="Zou !!!">
        <input class="btn offset-2 offset-md-0 col-3 col-md-1 btn-reset" id="btn-reset" type="button" value="Reset">
    </form>
<?php $content = ob_get_clean(); 
require('./vue/gabarit.php');