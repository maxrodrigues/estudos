<?php
// Abre a imagem
$persons = [
    'rodrygo' => [
        'image' => 'img/rodrygo.png',
        'json' => json_decode(' {"BoundingBox":{ "Width": 0.08212198317050934,"Height": 0.15793003141880035,"Left": 0.5426363348960876,"Top": 0.13318108022212982},"AgeRange":{"Low":20,"High":26},"Smile":{"Value":false,"Confidence":94.91873168945312},"Eyeglasses":{"Value":false,"Confidence":99.89755249023438},"Sunglasses":{"Value":false,"Confidence":99.80615997314453},"Gender":{"Value":"Male","Confidence":99.98361206054688},"Beard":{"Value":true,"Confidence":67.5453109741211},"Mustache":{"Value":false,"Confidence":92.85385131835938},"EyesOpen":{"Value":true,"Confidence":99.43415069580078},"MouthOpen":{"Value":true,"Confidence":98.89623260498047},"Emotions":[{"Type":"SURPRISED","Confidence":95.44270324707031},{"Type":"CONFUSED","Confidence":4.974365234375},{"Type":"FEAR","Confidence":2.37884521484375},{"Type":"CALM","Confidence":1.036834716796875},{"Type":"ANGRY","Confidence":0.80108642578125},{"Type":"HAPPY","Confidence":0.11043548583984375},{"Type":"DISGUSTED","Confidence":0.05736351013183594},{"Type":"SAD","Confidence":0.008106231689453125}],"Landmarks":[{"Type":"eyeLeft","X":0.5099056363105774,"Y":0.34690800309181213},{"Type":"eyeRight","X":0.5973986983299255,"Y":0.35367849469184875},{"Type":"mouthLeft","X":0.5121285319328308,"Y":0.45677390694618225},{"Type":"mouthRight","X":0.5850263237953186,"Y":0.4623648226261139},{"Type":"nose","X":0.5594506859779358,"Y":0.40288522839546204},{"Type":"leftEyeBrowLeft","X":0.4745400846004486,"Y":0.32217174768447876},{"Type":"leftEyeBrowRight","X":0.5321679711341858,"Y":0.3147108256816864},{"Type":"leftEyeBrowUp","X":0.5052630305290222,"Y":0.30818167328834534},{"Type":"rightEyeBrowLeft","X":0.5827338099479675,"Y":0.3186372220516205},{"Type":"rightEyeBrowRight","X":0.6273157596588135,"Y":0.33372920751571655},{"Type":"rightEyeBrowUp","X":0.6070011854171753,"Y":0.31598857045173645},{"Type":"leftEyeLeft","X":0.4929031431674957,"Y":0.34611690044403076},{"Type":"leftEyeRight","X":0.526858389377594,"Y":0.34945425391197205},{"Type":"leftEyeUp","X":0.5101408958435059,"Y":0.34123551845550537},{"Type":"leftEyeDown","X":0.5098100304603577,"Y":0.3518798351287842},{"Type":"rightEyeLeft","X":0.5797615647315979,"Y":0.3535522222518921},{"Type":"rightEyeRight","X":0.6117535829544067,"Y":0.355168879032135},{"Type":"rightEyeUp","X":0.5981738567352295,"Y":0.3480180501937866},{"Type":"rightEyeDown","X":0.5966094136238098,"Y":0.35850560665130615},{"Type":"noseLeft","X":0.5362996459007263,"Y":0.416870653629303},{"Type":"noseRight","X":0.5690324306488037,"Y":0.41927066445350647},{"Type":"mouthUp","X":0.5522132515907288,"Y":0.44328224658966064},{"Type":"mouthDown","X":0.5492373108863831,"Y":0.47672611474990845},{"Type":"leftPupil","X":0.5099056363105774,"Y":0.34690800309181213},{"Type":"rightPupil","X":0.5973986983299255,"Y":0.35367849469184875},{"Type":"upperJawlineLeft","X":0.44285061955451965,"Y":0.35462260246276855},{"Type":"midJawlineLeft","X":0.45649293065071106,"Y":0.4709985852241516},{"Type":"chinBottom","X":0.5424953103065491,"Y":0.5346099138259888},{"Type":"midJawlineRight","X":0.6131492257118225,"Y":0.4823196232318878},{"Type":"upperJawlineRight","X":0.6352380514144897,"Y":0.36897528171539307}],"Pose":{"Roll":5.5557074546813965,"Yaw":7.498130798339844,"Pitch":6.180079936981201},"Quality":{"Brightness":61.35962677001953,"Sharpness":94.08262634277344},"Confidence":99.99842834472656,"FaceOccluded":{"Value":false,"Confidence":99.8427963256836},"EyeDirection":{"Yaw":6.300429821014404,"Pitch":7.509992599487305,"Confidence":99.99646759033203}}', true)
    ],
    'vini' => [
        'image' => 'img/vinijrtest.png',
        'json' => json_decode(' {"BoundingBox":{"Width":0.19523614645004272,"Height":0.3085246682167053,"Left":0.44596758484840393,"Top":0.24232061207294464},"AgeRange":{"Low":20,"High":26},"Smile":{"Value":false,"Confidence":94.91873168945312},"Eyeglasses":{"Value":false,"Confidence":99.89755249023438},"Sunglasses":{"Value":false,"Confidence":99.80615997314453},"Gender":{"Value":"Male","Confidence":99.98361206054688},"Beard":{"Value":true,"Confidence":67.5453109741211},"Mustache":{"Value":false,"Confidence":92.85385131835938},"EyesOpen":{"Value":true,"Confidence":99.43415069580078},"MouthOpen":{"Value":true,"Confidence":98.89623260498047},"Emotions":[{"Type":"SURPRISED","Confidence":95.44270324707031},{"Type":"CONFUSED","Confidence":4.974365234375},{"Type":"FEAR","Confidence":2.37884521484375},{"Type":"CALM","Confidence":1.036834716796875},{"Type":"ANGRY","Confidence":0.80108642578125},{"Type":"HAPPY","Confidence":0.11043548583984375},{"Type":"DISGUSTED","Confidence":0.05736351013183594},{"Type":"SAD","Confidence":0.008106231689453125}],"Landmarks":[{"Type":"eyeLeft","X":0.5099056363105774,"Y":0.34690800309181213},{"Type":"eyeRight","X":0.5973986983299255,"Y":0.35367849469184875},{"Type":"mouthLeft","X":0.5121285319328308,"Y":0.45677390694618225},{"Type":"mouthRight","X":0.5850263237953186,"Y":0.4623648226261139},{"Type":"nose","X":0.5594506859779358,"Y":0.40288522839546204},{"Type":"leftEyeBrowLeft","X":0.4745400846004486,"Y":0.32217174768447876},{"Type":"leftEyeBrowRight","X":0.5321679711341858,"Y":0.3147108256816864},{"Type":"leftEyeBrowUp","X":0.5052630305290222,"Y":0.30818167328834534},{"Type":"rightEyeBrowLeft","X":0.5827338099479675,"Y":0.3186372220516205},{"Type":"rightEyeBrowRight","X":0.6273157596588135,"Y":0.33372920751571655},{"Type":"rightEyeBrowUp","X":0.6070011854171753,"Y":0.31598857045173645},{"Type":"leftEyeLeft","X":0.4929031431674957,"Y":0.34611690044403076},{"Type":"leftEyeRight","X":0.526858389377594,"Y":0.34945425391197205},{"Type":"leftEyeUp","X":0.5101408958435059,"Y":0.34123551845550537},{"Type":"leftEyeDown","X":0.5098100304603577,"Y":0.3518798351287842},{"Type":"rightEyeLeft","X":0.5797615647315979,"Y":0.3535522222518921},{"Type":"rightEyeRight","X":0.6117535829544067,"Y":0.355168879032135},{"Type":"rightEyeUp","X":0.5981738567352295,"Y":0.3480180501937866},{"Type":"rightEyeDown","X":0.5966094136238098,"Y":0.35850560665130615},{"Type":"noseLeft","X":0.5362996459007263,"Y":0.416870653629303},{"Type":"noseRight","X":0.5690324306488037,"Y":0.41927066445350647},{"Type":"mouthUp","X":0.5522132515907288,"Y":0.44328224658966064},{"Type":"mouthDown","X":0.5492373108863831,"Y":0.47672611474990845},{"Type":"leftPupil","X":0.5099056363105774,"Y":0.34690800309181213},{"Type":"rightPupil","X":0.5973986983299255,"Y":0.35367849469184875},{"Type":"upperJawlineLeft","X":0.44285061955451965,"Y":0.35462260246276855},{"Type":"midJawlineLeft","X":0.45649293065071106,"Y":0.4709985852241516},{"Type":"chinBottom","X":0.5424953103065491,"Y":0.5346099138259888},{"Type":"midJawlineRight","X":0.6131492257118225,"Y":0.4823196232318878},{"Type":"upperJawlineRight","X":0.6352380514144897,"Y":0.36897528171539307}],"Pose":{"Roll":5.5557074546813965,"Yaw":7.498130798339844,"Pitch":6.180079936981201},"Quality":{"Brightness":61.35962677001953,"Sharpness":94.08262634277344},"Confidence":99.99842834472656,"FaceOccluded":{"Value":false,"Confidence":99.8427963256836},"EyeDirection":{"Yaw":6.300429821014404,"Pitch":7.509992599487305,"Confidence":99.99646759033203}}', true),
    ],
];

$key = array_rand($persons);
$faceDetails = $persons[$key]['json'];
$boundingBox = $faceDetails['BoundingBox'];

$width = $boundingBox['Width'] + ($boundingBox['Width'] * 0.9);
$height = $boundingBox['Height'] + ($boundingBox['Height'] * 0.5);
$left = $boundingBox['Left'] - ($boundingBox['Left'] * 0.09);
$top = $boundingBox['Top'] - ($boundingBox['Top'] * 0.30);

[$imageWidth, $imageHeight] = getimagesize($persons[$key]['image']);

$faceX = $left * $imageWidth; // -  (($left * $imageWidth)* 0.1);
$faceY = $top * $imageHeight; // - (($top * $imageHeight) * 0.1);
$faceWidth = ($width * $imageWidth); // +  (($width * $imageWidth)* 0.3);
$faceHeight = ($height * $imageHeight); // + (($height * $imageHeight) * 0.2);

$realWidth = $faceWidth;
$realHeight = $faceHeight;

header('Content-type: image/png');

$image = imagecreatefrompng($persons[$key]['image']);

$region = imagecreatetruecolor($realWidth, $realHeight);
imagecopy($region, $image, 0, 0, $faceX, $faceY, $realWidth, $realHeight);

for ($i = 0; $i < 70; $i++) {
    imagefilter($region, IMG_FILTER_GAUSSIAN_BLUR);
}
//
imagefilter($region, IMG_FILTER_PIXELATE, 30);

imagecopy($image, $region, $faceX, $faceY, 0, 0, $realWidth, $realHeight);

imagepng($image);
imagedestroy($image);
imagedestroy($region);

