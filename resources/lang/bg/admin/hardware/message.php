<?php

return [

    'undeployable' 		=> '<strong>Внимание:</strong> Този актив е маркиран като невъзможен за предоставяне. Ако статусът е променен, моля обновете актива.',
    'does_not_exist' 	=> 'Активът не съществува.',
    'does_not_exist_or_not_requestable' => 'That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'Активът е изписан на потребител и не може да бъде изтрит. Моля впишете го обратно и след това опитайте да го изтриете отново.',

    'create' => [
        'error'   		=> 'Активът не беше създаден. Моля опитайте отново.',
        'success' 		=> 'Активът създаден успешно.',
    ],

    'update' => [
        'error'   			=> 'Активът не беше обновен. Моля опитайте отново.',
        'success' 			=> 'Активът обновен успешно.',
        'nothing_updated'	=>  'Няма избрани полета, съответно нищо не беше обновено.',
        'no_assets_selected'  =>  'No assets were selected, so nothing was updated.',
    ],

    'restore' => [
        'error'   		=> 'Активът не беше възстановен. Моля опитайте отново.',
        'success' 		=> 'Активът възстановен успешно.',
        'bulk_success' 		=> 'Asset restored successfully.',
        'nothing_updated'   => 'No assets were selected, so nothing was restored.', 
    ],

    'audit' => [
        'error'   		=> 'Одитът на активи бе неуспешен. Моля, опитайте отново.',
        'success' 		=> 'Активният одит бе успешно регистриран.',
    ],


    'deletefile' => [
        'error'   => 'Файлът не беше изтрит. Моля опитайте отново.',
        'success' => 'Файлът изтрит успешно.',
    ],

    'upload' => [
        'error'   => 'Качването неуспешно. Моля опитайте отново.',
        'success' => 'Качването успешно.',
        'nofiles' => 'Не сте избрали файлове за качване или са твърде големи.',
        'invalidfiles' => 'Един или повече файлове са твърде големи или с непозволен тип. Разрешените файлови типове за качване са png, gif, jpg, doc, docx, pdf и txt.',
    ],

    'import' => [
        'error'                 => 'Някои елементи не бяха въведени правилно.',
        'errorDetail'           => 'Следните елементи не бяха въведени поради грешки.',
        'success'               => 'Вашият файл беше въведен.',
        'file_delete_success'   => 'Вашият файл беше изтрит успешно.',
        'file_delete_error'      => 'Файлът не е в състояние да бъде изтрит',
        'header_row_has_malformed_characters' => 'One or more attributes in the header row contain malformed UTF-8 characters',
        'content_row_has_malformed_characters' => 'One or more attributes in the first row of content contain malformed UTF-8 characters',
    ],


    'delete' => [
        'confirm'   	=> 'Сигурни ли сте, че желаете изтриване на актива?',
        'error'   		=> 'Проблем при изтриване на актива. Моля опитайте отново.',
        'nothing_updated'   => 'Няма избрани активи, така че нищо не бе изтрито.',
        'success' 		=> 'Активът е изтрит успешно.',
    ],

    'checkout' => [
        'error'   		=> 'Активът не беше изписан. Моля опитайте отново.',
        'success' 		=> 'Активът изписан успешно.',
        'user_does_not_exist' => 'Невалиден потребител. Моля опитайте отново.',
        'not_available' => 'Този актив не е наличен за отписване!',
        'no_assets_selected' => 'Трябва да изберете поне един елемент към списъка',
    ],

    'checkin' => [
        'error'   		=> 'Активът не беше вписан. Моля опитайте отново.',
        'success' 		=> 'Активът вписан успешно.',
        'user_does_not_exist' => 'Невалиден потребител. Моля опитайте отново.',
        'already_checked_in'  => 'Активът е вече вписан.',

    ],

    'requests' => [
        'error'   		=> 'Активът не беше изискан. Моля опитайте отново.',
        'success' 		=> 'Активът изискан успешно.',
        'canceled'      => 'Заявка за отписване отказана успешно',
    ],

];
