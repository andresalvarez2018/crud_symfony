<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Энэ утга буруу байх ёстой.',
    'This value should be true.' => 'Энэ утга үнэн байх ёстой.',
    'This value should be of type {{ type }}.' => 'Энэ утга  {{ type }} -н төрөл байх ёстой.',
    'This value should be blank.' => 'Энэ утга хоосон байх ёстой.',
    'The value you selected is not a valid choice.' => 'Сонгосон утга буруу байна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Хамгийн багадаа {{ limit }} утга сонгогдсон байх ёстой.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Хамгийн ихдээ {{ limit }} утга сонгогдох боломжтой.',
    'One or more of the given values is invalid.' => 'Өгөгдсөн нэг эсвэл нэгээс олон утга буруу байна.',
    'This field was not expected.' => 'Энэ талбар нь хүлээгдэж байсан юм.',
    'This field is missing.' => 'Энэ талбар нь алга болсон байна.',
    'This value is not a valid date.' => 'Энэ утга буруу date төрөл байна .',
    'This value is not a valid datetime.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid email address.' => 'И-майл хаяг буруу байна.',
    'The file could not be found.' => 'Файл олдсонгүй.',
    'The file is not readable.' => 'Файл уншигдахуйц биш байна.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна ({{ size }} {{ suffix }}). Зөвшөөрөгдөх дээд хэмжээ  {{ limit }} {{ suffix }} байна.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Файлын MIME-төрөл нь буруу байна ({{ type }}). Зөвшөөрөгдөх MIME-төрлүүд {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Энэ утга  {{ limit }} юмуу эсвэл бага байна.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Энэ утга хэтэрхий урт байна. {{ limit }} тэмдэгтийн урттай юмуу эсвэл бага байна.',
    'This value should be {{ limit }} or more.' => 'Энэ утга {{ limit }} юмуу эсвэл их байна.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Энэ утга хэтэрхий богино байна. {{ limit }} тэмдэгт эсвэл их байна.',
    'This value should not be blank.' => 'Энэ утга хоосон байж болохгүй.',
    'This value should not be null.' => 'Энэ утга null байж болохгүй.',
    'This value should be null.' => 'Энэ утга null байна.',
    'This value is not valid.' => 'Энэ утга буруу байна.',
    'This value is not a valid time.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid URL.' => 'Энэ утга буруу URL байна .',
    'The two values should be equal.' => 'Хоёр утгууд ижил байх ёстой.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна. Зөвшөөрөгдөх дээд хэмжээ нь {{ limit }} {{ suffix }} байна.',
    'The file is too large.' => 'Файл хэтэрхий том байна.',
    'The file could not be uploaded.' => 'Файл upload хийгдсэнгүй.',
    'This value should be a valid number.' => 'Энэ утга зөвхөн тоо байна.',
    'This file is not a valid image.' => 'Файл зураг биш байна.',
    'This is not a valid IP address.' => 'IP хаяг зөв биш байна.',
    'This value is not a valid language.' => 'Энэ утга үнэн зөв хэл биш байна.',
    'This value is not a valid locale.' => 'Энэ утга үнэн зөв байршил биш байна.',
    'This value is not a valid country.' => 'Энэ утга үнэн бодит улс биш байна.',
    'This value is already used.' => 'Энэ утга аль хэдийнээ хэрэглэгдсэн байна.',
    'The size of the image could not be detected.' => 'Зургийн хэмжээ тогтоогдож чадсангүй.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Зургийн өргөн хэтэрхий том байна ({{ width }}px). Өргөн нь хамгийн ихдээ {{ max_width }}px байх боломжтой.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Зургийн өргөн хэтэрхий жижиг байна ({{ width }}px). Өргөн нь хамгийн багадаа {{ min_width }}px байх боломжтой.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Зургийн өндөр хэтэрхий том байна ({{ height }}px). Өндөр нь хамгийн ихдээ {{ max_height }}px байх боломжтой.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Зургийн өндөр хэтэрхий жижиг байна ({{ height }}px). Өндөр нь хамгийн багадаа {{ min_height }}px байх боломжтой.',
    'This value should be the user\'s current password.' => 'Энэ утга хэрэглэгчийн одоогийн нууц үг байх ёстой.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Энэ утга яг {{ limit }} тэмдэгт байх ёстой.|Энэ утга яг {{ limit }} тэмдэгт байх ёстой.',
    'The file was only partially uploaded.' => 'Файлын зөвхөн хагас нь upload хийгдсэн.',
    'No file was uploaded.' => 'Ямар ч файл upload хийгдсэнгүй.',
    'No temporary folder was configured in php.ini.' => 'php.ini дээр түр зуурын хавтсыг тохируулаагүй байна, эсвэл тохируулсан хавтас байхгүй байна.',
    'Cannot write temporary file to disk.' => 'Түр зуурын файлыг диск руу бичиж болохгүй байна.',
    'A PHP extension caused the upload to fail.' => 'PHP extension нь upload -г амжилтгүй болгоод байна.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Энэ коллекц яг {{ limit }} элемент агуулах ёстой.|Энэ коллекц яг {{ limit }} элемент агуулах ёстой.',
    'Invalid card number.' => 'Картын дугаар буруу байна.',
    'Unsupported card type or invalid card number.' => 'Дэмжигдээгүй картын төрөл эсвэл картын дугаар буруу байна.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Энэ утга үнэн зөв Олон Улсын Банкны Дансны Дугаар (IBAN) биш байна.',
    'This value is not a valid ISBN-10.' => 'Энэ утга үнэн зөв ISBN-10 биш байна.',
    'This value is not a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-13 биш байна.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-10 юмуу ISBN-13 биш байна.',
    'This value is not a valid ISSN.' => 'Энэ утга үнэн зөв ISSN биш байна.',
    'This value is not a valid currency.' => 'Энэ утга үнэн бодит валют биш байна.',
    'This value should be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тaй тэнцүү байх ёстой.',
    'This value should be greater than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с их байх ёстой.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү юмуу эсвэл их байх ёстой.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёстой.',
    'This value should be less than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с бага байх ёстой.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай ижил юмуу эсвэл бага байх ёстой.',
    'This value should not be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү байх ёсгүй.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёсгүй.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Зургийн харьцаа хэтэрхий том байна ({{ ratio }}). Харьцаа нь хамгийн ихдээ {{ max_ratio }} байна.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Зургийн харьцаа хэтэрхий жижиг байна ({{ ratio }}). Харьцаа нь хамгийн багадаа {{ min_ratio }} байна.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зураг дөрвөлжин хэлбэртэй байна ({{ width }}x{{ height }}px). Дөрвөлжин зургууд оруулах боломжгүй.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зураг хэвтээ байрлалтай байна ({{ width }}x{{ height }}px). Хэвтээ байрлалтай зургууд оруулах боломжгүй.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зургууд босоо байрлалтай байна ({{ width }}x{{ height }}px). Босоо байрлалтай зургууд оруулах боломжгүй.',
    'An empty file is not allowed.' => 'Хоосон файл оруулах боломжгүй.',
    'The host could not be resolved.' => 'Хост зөв тохирогдоогүй байна.',
    'This value does not match the expected {{ charset }} charset.' => 'Энэ утга тооцоолсон {{ charset }} тэмдэгттэй таарахгүй байна.',
    'This is not a valid Business Identifier Code (BIC).' => 'Энэ утга үнэн зөв Business Identifier Code (BIC) биш байна.',
    'Error' => 'Алдаа',
    'This is not a valid UUID.' => 'Энэ утга үнэн зөв UUID биш байна.',
    'This value should be a multiple of {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -н үржвэр байх ёстой.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Энэ Business Identifier Code (BIC) код нь IBAN {{ iban }} -тай холбоогүй байна.',
    'This value should be valid JSON.' => 'Энэ утга JSON байх ёстой.',
    'This collection should contain only unique elements.' => 'Энэ коллекц зөвхөн давтагдахгүй элементүүд агуулах ёстой.',
    'This value should be positive.' => 'Энэ утга эерэг байх ёстой.',
    'This value should be either positive or zero.' => 'Энэ утга тэг эсвэл эерэг байх ёстой.',
    'This value should be negative.' => 'Энэ утга сөрөг байх ёстой.',
    'This value should be either negative or zero.' => 'Энэ утга сөрөг эсвэл тэг байх ёстой.',
    'This value is not a valid timezone.' => 'Энэ утга үнэн зөв цагийн бүс биш байна.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Энэ нууц үгийн мэдээлэл алдагдсан байх магадлалтай учраас дахин ашиглагдах ёсгүй. Өөр нууц үг ашиглана уу.',
    'This value should be between {{ min }} and {{ max }}.' => 'Энэ утга {{ min }} -с {{ max }} хооронд байх ёстой.',
    'This value is not a valid hostname.' => 'Энэ утга буруу hostname байна.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Энэхүү цуглуулган дахь элемэнтийн тоо, {{ compared_value }}-н үржвэр байх ёстой.',
    'This value should satisfy at least one of the following constraints:' => 'Энэ утга доорх болзолуудын ядаж нэгийг хангах ёстой:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Энэхүү цуглуулган дахь элемэнтүүд өөр өөрсдийн болзолуудаа хангах ёстой.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Энэ утга зөв International Securities Identification Number (ISIN) биш байна.',
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
    'This value is not a valid HTML5 color.' => 'Энэ утга зөв HTML5 өнгө биш байна.',
    'Please enter a valid birthdate.' => 'Зөв төрсөн он сар оруулна уу.',
    'The selected choice is invalid.' => 'Сонгосон утга буруу байна.',
    'The collection is invalid.' => 'Цуглуулга буруу байна.',
    'Please select a valid color.' => 'Үнэн зөв өнгө сонгоно уу.',
    'Please select a valid country.' => 'Үнэн зөв улс сонгоно уу.',
    'Please select a valid currency.' => 'Үнэн зөв мөнгөн тэмдэгт сонгоно уу.',
    'Please choose a valid date interval.' => 'Үнэн зөв цагын зай сонгоно уу.',
    'Please enter a valid date and time.' => 'Үнэн зөв он цаг оруулна уу.',
    'Please enter a valid date.' => 'Үнэн зөв он цаг өдөр оруулна уу.',
    'Please select a valid file.' => 'Үнэн зөв файл сонгоно уу.',
    'The hidden field is invalid.' => 'Нууц талбарын утга буруу байна.',
    'Please enter an integer.' => 'Бүхэл тоо оруулна уу.',
    'Please select a valid language.' => 'Үнэн зөв хэл сонгоно уу.',
    'Please select a valid locale.' => 'Үнэн зөв бүс сонгоно уу.',
    'Please enter a valid money amount.' => 'Үнэн зөв мөнгөний хэмжээ сонгоно уу.',
    'Please enter a number.' => 'Тоо оруулна уу.',
    'The password is invalid.' => 'Нууц үг буруу байна.',
    'Please enter a percentage value.' => 'Хувь утга оруулна уу.',
    'The values do not match.' => 'Утга хоорондоо таарахгүй байна.',
    'Please enter a valid time.' => 'Үнэн зөв цаг оруулна уу.',
    'Please select a valid timezone.' => 'Үнэн зөв цагын бүс оруулна уу.',
    'Please enter a valid URL.' => 'Үнэн зөв URL оруулна уу.',
    'Please enter a valid search term.' => 'Үнэн зөв хайх утга оруулна уу.',
    'Please provide a valid phone number.' => 'Үнэн зөв утасны дугаар оруулна уу.',
    'The checkbox has an invalid value.' => 'Сонгох хайрцаг буруу утгатай байна.',
    'Please enter a valid email address.' => 'Үнэн зөв и-мэйл хаяг оруулна уу.',
    'Please select a valid option.' => 'Үнэн зөв сонголт сонгоно уу.',
    'Please select a valid range.' => 'Үнэн зөв хязгаарын утга сонгоно уу.',
    'Please enter a valid week.' => 'Үнэн зөв долоо хоног сонгоно уу.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Нэвтрэх хүсэлтийн алдаа гарав.',
    'Authentication credentials could not be found.' => 'Нэвтрэх эрхийн мэдээлэл олдсонгүй.',
    'Authentication request could not be processed due to a system problem.' => 'Системийн алдаанаас болон нэвтрэх хүсэлтийг гүйцэтгэх боломжгүй байна.',
    'Invalid credentials.' => 'Буруу нэвтрэх эрхийн мэдээлэл.',
    'Cookie has already been used by someone else.' => 'Күүки файлыг аль хэдийн өөр хүн хэрэглэж байна.',
    'Not privileged to request the resource.' => 'Энэхүү мэдээллийг авах эрх хүрэхгүй байна.',
    'Invalid CSRF token.' => 'Тохиромжгүй CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Нэвтрэх токенг дэмжих нэвтрэх эрхийн хангагч олдсонгүй.',
    'No  available, it either timed out or cookies are not enabled.' => 'Хэрэглэгчийн session олдсонгүй, хугацаа нь дууссан эсвэл күүки идэвхижүүлээгүй байна.',
    'No token could be found.' => 'Токен олдсонгүй.',
    'Username could not be found.' => 'Нэвтрэх нэр олсонгүй.',
    'Account has expired.' => 'Бүртгэлийн хугацаа дууссан байна.',
    'Credentials have expired.' => 'Нэвтрэх эрхийн хугацаа дууссан байна.',
    'Account is disabled.' => 'Бүртгэлийг хаасан байна.',
    'Account is locked.' => 'Бүртгэлийг цоожилсон байна.',
    'Too many failed login attempts, please try again later.' => 'Хэтэрхий олон амжилтгүй оролдлого, түр хүлээгээд дахин оролдоно уу.',
    'Invalid or expired login link.' => 'Буруу эсвэл хугацаа нь дууссан нэвтрэх зам.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini o la carpeta configurada no existe.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debería estar entre {{ min }} y {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor no es un nombre de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El número de elementos en esta colección debería ser múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debería satisfacer al menos una de las siguientes restricciones:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento de esta colección debería satisfacer su propio conjunto de restricciones.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor no es un número de identificación internacional de valores (ISIN) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor no es un color HTML5 válido.',
    'Please enter a valid birthdate.' => 'Por favor, ingrese una fecha de cumpleaños válida.',
    'The selected choice is invalid.' => 'La opción seleccionada no es válida.',
    'The collection is invalid.' => 'La colección no es válida.',
    'Please select a valid color.' => 'Por favor, seleccione un color válido.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione una moneda válida.',
    'Please choose a valid date interval.' => 'Por favor, elija un intervalo de fechas válido.',
    'Please enter a valid date and time.' => 'Por favor, ingrese una fecha y hora válidas.',
    'Please enter a valid date.' => 'Por favor, ingrese una fecha valida.',
    'Please select a valid file.' => 'Por favor, seleccione un archivo válido.',
    'The hidden field is invalid.' => 'El campo oculto no es válido.',
    'Please enter an integer.' => 'Por favor, ingrese un número entero.',
    'Please select a valid language.' => 'Por favor, seleccione un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione una configuración regional válida.',
    'Please enter a valid money amount.' => 'Por favor, ingrese una cantidad de dinero válida.',
    'Please enter a number.' => 'Por favor, ingrese un número.',
    'The password is invalid.' => 'La contraseña no es válida.',
    'Please enter a percentage value.' => 'Por favor, ingrese un valor porcentual.',
    'The values do not match.' => 'Los valores no coinciden.',
    'Please enter a valid time.' => 'Por favor, ingrese una hora válida.',
    'Please select a valid timezone.' => 'Por favor, seleccione una zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, ingrese una URL válida.',
    'Please enter a valid search term.' => 'Por favor, ingrese un término de búsqueda válido.',
    'Please provide a valid phone number.' => 'Por favor, proporcione un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'La casilla de verificación tiene un valor inválido.',
    'Please enter a valid email address.' => 'Por favor, ingrese una dirección de correo electrónico válida.',
    'Please select a valid option.' => 'Por favor, seleccione una opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un rango válido.',
    'Please enter a valid week.' => 'Por favor, ingrese una semana válida.',
    'Categories.' => 'Categorias.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo más tarde.',
    'Invalid or expired login link.' => 'Enlace de inicio de sesión inválido o expirado.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Inicio',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Modificar %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Crear %entity_label_singular%',
    'page_title.exception' => 'Error|Errores',
    'datagrid.hidden_results' => 'Algunos resultados no se pueden mostrar porque no tienes suficientes permisos',
    'datagrid.no_results' => 'No se han encontrado resultados.',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Ningún resultado|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Nulo',
    'label.nullable_field' => 'Dejar vacío',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'label.form.empty_value' => '__label.form.empty_value',
    'field.code_editor.view_code' => 'Ver código',
    'field.text_editor.view_content' => 'Ver contenido',
    'action.entity_actions' => 'Acciones',
    'action.new' => 'Crear %entity_label_singular%',
    'action.search' => 'Buscar',
    'action.detail' => 'Ver',
    'action.edit' => 'Modificar',
    'action.delete' => 'Borrar',
    'action.cancel' => 'Cancelar',
    'action.index' => 'Volver al listado',
    'action.deselect' => 'Deseleccionar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'action.choose_file' => 'Seleccionar archivo',
    'action.close' => 'Cerrar',
    'action.create' => 'Guardar',
    'action.create_and_add_another' => 'Crear y añadir otro',
    'action.create_and_continue' => 'Crear y seguir editando',
    'action.save' => 'Guardar cambios',
    'action.save_and_continue' => 'Guardar y seguir editando',
    'batch_action_modal.title' => '¿Realmente quieres modificar los elementos seleccionados?',
    'batch_action_modal.content' => 'Esta acción no se puede deshacer.',
    'batch_action_modal.action' => 'Continuar',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'filter.title' => 'Filtros',
    'filter.button.clear' => 'Borrar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'es igual a',
    'filter.label.is_not_equal_to' => 'no es igual a',
    'filter.label.is_greater_than' => 'es mayor que',
    'filter.label.is_greater_than_or_equal_to' => 'es mayor o igual que',
    'filter.label.is_less_than' => 'es menor que',
    'filter.label.is_less_than_or_equal_to' => 'es menor o igual que',
    'filter.label.is_between' => 'está entre',
    'filter.label.contains' => 'contiene',
    'filter.label.not_contains' => 'no contiene',
    'filter.label.starts_with' => 'empieza por',
    'filter.label.ends_with' => 'acaba en',
    'filter.label.exactly' => 'es exactamente',
    'filter.label.not_exactly' => 'no es exactamente',
    'filter.label.is_same' => 'es igual a',
    'filter.label.is_not_same' => 'no es igual a',
    'filter.label.is_after' => 'es posterior a',
    'filter.label.is_after_or_same' => 'es posterior o igual a',
    'filter.label.is_before' => 'es anterior a',
    'filter.label.is_before_or_same' => 'es anterior o igual a',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'form.tab.error_badge_title' => 'Hay un campo inválido|Hay %count% campos inválidos',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.sign_out' => 'Cerrar sesión',
    'user.exit_impersonation' => 'Terminar impersonación',
    'login_page.username' => 'Nombre de usuario',
    'login_page.password' => 'Contraseña',
    'login_page.sign_in' => 'Iniciar sesión',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;