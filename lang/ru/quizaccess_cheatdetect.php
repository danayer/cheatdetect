<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    quizaccess_cheatdetect
 * @copyright  2026 CBlue SRL
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     gnormand@cblue.be
 * @since      1.0.0
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Обнаружение списывания';
$string['privacy:metadata'] = 'Плагин CheatDetect сохраняет информацию о попытках прохождения теста в целях предотвращения списывания.';
$string['privacy:metadata:metric'] = 'Хранит метрики: время фокусировки, количество копирований и потерь фокуса.';
$string['privacy:metadata:event'] = 'Хранит необработанные события, зафиксированные во время попытки прохождения теста.';
$string['privacy:metadata:extension'] = 'Хранит информацию об обнаруженных расширениях браузера.';

// Results
$string['cheatdetection'] = 'Обнаружение списывания';
$string['noeventsdetected'] = 'Подозрительных событий не обнаружено';
$string['eventsdetected'] = 'Обнаружено подозрительных событий: {$a}';

// Review question page - summary block
$string['questiondetails'] = 'Обнаружение списывания — подробности по вопросу';
$string['timespent'] = 'Пользователь провёл {$a->duration} ({$a->percentage}% теста) на вопросе {$a->slot}';
$string['day'] = 'день';
$string['days'] = 'дней';
$string['hour'] = 'час';
$string['hours'] = 'часов';
$string['minute'] = 'минута';
$string['minutes'] = 'минут';
$string['second'] = 'секунда';
$string['seconds'] = 'секунд';
$string['copycount'] = 'Количество копирований текста вопроса: {$a}';
$string['focuslosscount'] = 'Количество потерь фокуса страницы: {$a}';
$string['extensiondetected'] = 'Обнаружение расширения для списывания: {$a}';
$string['yes'] = 'Да';
$string['no'] = 'Нет';
$string['closepopover'] = 'Закрыть';
$string['multiplepageswarning'] = 'Обнаружение списывания недоступно: тест должен отображать по одному вопросу на странице.';

$string['cheatdetectheader'] = 'Обнаружение списывания';
$string['cheatdetectinfo'] = 'Обнаружение списывания автоматически включается для этого теста, если выбран режим «Один вопрос на странице». Система будет отслеживать поведение студентов во время попыток прохождения теста для выявления потенциальных нарушений, таких как потеря фокуса, операции копирования/вставки и использование расширений браузера.';
$string['layoutwarning'] = 'Внимание: обнаружение списывания работает только в режиме «Один вопрос на странице». Измените настройку «Вопросов на странице», чтобы включить мониторинг.';
$string['cheatdetectdescription'] = 'Этот тест отслеживает поведение студентов во время попыток для выявления потенциальных нарушений.';

$string['cheatdetect:view'] = 'Просмотр конфигурации и общих данных обнаружения списывания';
$string['cheatdetect:manage'] = 'Управление конфигурацией обнаружения списывания';
$string['cheatdetect:viewcoursereports'] = 'Просмотр отчётов об обнаружении списывания по курсу';

$string['privacy:metadata:attemptid'] = 'Идентификатор попытки прохождения теста, связанной с этой записью.';
$string['privacy:metadata:userid'] = 'Идентификатор пользователя, связанного с этой записью.';
$string['privacy:metadata:actions'] = 'Действия, зафиксированные во время попытки прохождения теста.';
$string['privacy:metadata:metrics'] = 'Вычисленные метрики, связанные с попыткой прохождения теста пользователем.';
$string['privacy:metadata:extensions'] = 'Данные о расширениях, связанные с попыткой прохождения теста пользователем.';

$string['privacy:metadata:quizaccess_cheatdetect_events'] = 'Хранит необработанные события, зафиксированные во время попыток прохождения теста, для анализа обнаружения списывания.';
$string['privacy:metadata:quizaccess_cheatdetect_metrics'] = 'Хранит вычисленные метрики обнаружения списывания для каждой попытки прохождения теста.';
$string['privacy:metadata:quizaccess_cheatdetect_extensions'] = 'Хранит данные о расширениях, связанные с попытками прохождения теста, в целях обнаружения списывания.';
