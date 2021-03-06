<?php

namespace tests;

use DateTime;
use src\TextAnalyser;
use PHPUnit\Framework\TestCase;

class TextAnalyserTest extends TestCase
{
    public const TEXT_TO_PARS = 'Вочевидь, зараз не всі пригадають цю серпневу дату – вісімнадцяте святкування Дня Незалежності України. Відлік десятилітньої історії Вишиванкового фестивалю розпочався саме тоді, коли сімдесят дев’ять людей, убраних у виши́ванки, утворили вздовж Потьомкінських сходів так званий «живий ланцюг». Амбітні плани організаторів повністю виправдалися: він сягнув-таки берега моря. Простягаючись білою ниткою від п’єдесталу пам’ятника Рішельє, ланцюг із року в рік ставав усе довшим, а разом із цим зростало й усвідомлення Одеси як українського міста. Зростало настільки, що в 2014 році, незважаючи на невпинну зливу, для участі в акції «Вишиванковий ланцюг» вишикувалася півторатисячна черга, утворивши нескінченне живе море виши́ванок.

Подальші два роки запам’яталися встановленням нових рекордів, адже́ кількість учасників збільшилася вдвічі. До речі, дюк де Рішельє також долучається до цієї події. Четвертий рік поспіль святковий гардероб герцога поповнюється найрізноманітнішими виши́ванками: блакитно-синій і яскраво-червоний, жовтогарячий і ніжно-зелений – ось палітра його ви́шитих візерунків.

Уже вдеся́те майорить Приморський бульвар синьо-жовтими барвами, і вже вкотре ми збираємось у самому серці Одеси, щоб помилуватися показом автентичного вбрання, написати диктант просто неба, концентруючи  нашу енергію й демонструючи всім як свою єдність, так і свою любов до рідного міста та своєї країни. піп ';

    public function testAnalise(): void
    {
        $textAnalise = new TextAnalyser();
        $this->assertEquals(
            [
                'Number of characters' => 1406,
                'Number of words' => 514,
                'Number of sentences' => 10,
                'Frequency of characters' => [
                    ' ' => 185,
                    'В' => 4,
                    'о' => 90,
                    'ч' => 17,
                    'е' => 55,
                    'в' => 80,
                    'и' => 82,
                    'д' => 37,
                    'ь' => 25,
                    ',' => 18,
                    'з' => 20,
                    'а' => 93,
                    'р' => 55,
                    'н' => 75,
                    'с' => 62,
                    'і' => 66,
                    'п' => 23,
                    'г' => 19,
                    'ю' => 20,
                    'т' => 63,
                    'ц' => 12,
                    'у' => 27,
                    '–' => 2,
                    'м' => 31,
                    'я' => 31,
                    'к' => 44,
                    'Д' => 2,
                    'Н' => 1,
                    'л' => 37,
                    'ж' => 12,
                    'У' => 2,
                    'ї' => 9,
                    '.' => 9,
                    'ш' => 15,
                    'ф' => 1,
                    '’' => 4,
                    'й' => 16,
                    'б' => 14,
                    'х' => 5,
                    '́' => 6,
                    'П' => 4,
                    '«' => 2,
                    '»' => 2,
                    'А' => 1,
                    ':' => 2,
                    '-' => 5,
                    'є' => 9,
                    'Р' => 2,
                    'О' => 2,
                    'З' => 1,
                    'щ' => 2,
                    2 => 1,
                    0 => 1,
                    1 => 1,
                    4 => 1,
                    'Ч' => 1,
                ],
                'Distribution of characters as a percentage of total' => [
                    'В' => '0.00',
                    'о' => '0.06',
                    'ч' => '0.01',
                    'е' => '0.04',
                    'в' => '0.06',
                    'и' => '0.06',
                    'д' => '0.03',
                    'ь' => '0.02',
                    ',' => '0.01',
                    ' ' => '0.13',
                    'з' => '0.01',
                    'а' => '0.07',
                    'р' => '0.04',
                    'н' => '0.05',
                    'с' => '0.04',
                    'і' => '0.05',
                    'п' => '0.02',
                    'г' => '0.01',
                    'ю' => '0.01',
                    'т' => '0.04',
                    'ц' => '0.01',
                    'у' => '0.02',
                    '–' => '0.00',
                    'м' => '0.02',
                    'я' => '0.02',
                    'к' => '0.03',
                    'Д' => '0.00',
                    'Н' => '0.00',
                    'л' => '0.03',
                    'ж' => '0.01',
                    'У' => '0.00',
                    'ї' => '0.01',
                    '.' => '0.01',
                    'ш' => '0.01',
                    'ф' => '0.00',
                    '’' => '0.00',
                    'й' => '0.01',
                    'б' => '0.01',
                    'х' => '0.00',
                    '́' => '0.00',
                    'П' => '0.00',
                    '«' => '0.00',
                    '»' => '0.00',
                    'А' => '0.00',
                    ':' => '0.00',
                    '-' => '0.00',
                    'є' => '0.01',
                    'Р' => '0.00',
                    'О' => '0.00',
                    'З' => '0.00',
                    'щ' => '0.00',
                    2 => '0.00',
                    0 => '0.00',
                    1 => '0.00',
                    4 => '0.00',
                    'Ч' => '0.00'
                ],
                'Average word length' => '6.51',
                'The average number of words in a sentence' => '18.60',
                'Top 10 most used words' => [
                    'і' => 4,
                    'в' => 3,
                    'у' => 2,
                    'й' => 2,
                    'із' => 2,
                    'до' => 3,
                    'зростало' => 2,
                    'рік' => 2,
                    'одеси' => 2,
                    'як' => 2
                ],
                'Top 10 longest words' => [
                    'найрізноманітнішими' => 19,
                    'яскраво-червоний' => 16,
                    'блакитно-синій' => 14,
                    'півторатисячна' => 14,
                    'встановленням' => 13,
                    'потьомкінських' => 14,
                    'простягаючись' => 13,
                    'організаторів' => 13,
                    'десятилітньої' => 13,
                    'вишиванкового' => 13
                ],
                'Top 10 shortest words' => [
                    'і' => 1,
                    'й' => 1,
                    'а' => 1,
                    'в' => 1,
                    'у' => 1,
                    'із' => 2,
                    'не' => 2,
                    'до' => 2,
                    'цю' => 2,
                    'та' => 2,
                ],
                'Number of palindrome words' => 2,
                'Top 10 longest palindrome words' => [
                    'зараз' => 5,
                    'піп' => 3
                ],
                'date' => (new DateTime('now'))->format('Y-m-d-h-m'),
                'The reversed text' => ' піп .инїарк їєовс ат атсім огондір од вобюл юовс і кат ,ьтсіндє юовс кя місв ичюуртсномед й юігрене ушан  ичюуртнецнок ,абен отсорп тнаткид итасипан ,яннарбв огончитнетва мозакоп яситавулимоп бощ ,иседО іцрес умомас у ьсомєарибз им ертокв ежв і ,имавраб имитвож-оьнис равьлуб йикьсромирП ьтиройам ет́яседв ежУ .вікнурезів хитиш́ив огой артілап ьсо – йинелез-онжін і йичяраготвож ,йиновреч-оваркся і йінис-онтикалб :имакнав́ишив имишінтінамонзірйан ясьтєюнвопоп агоцрег боредраг йивоктявс ьліпсоп кір йитревтеЧ .їідоп їєіц од ясьтєачулод жокат єьлешіР ед кюд ,ічер оД .ічівдв ясалишьлібз вікинсачу ьтсікьлік ́ежда ,відрокер хивон мяннелвонатсв ясилатя’мапаз икор авд ішьладоП .конав́ишив ером евиж еннечніксен ишвировту ,агреч анчяситаротвіп ясалавукишив »гюцнал йивокнавишиВ« їіцка в ітсачу ялд ,увилз уннипвен ан ичюажавзен ,іцор 4102 в ощ ,икьлітсан олатсорЗ .атсім огокьснїарку кя иседО яннелмодівсу й олатсорз миц зі мозар а ,мишвод есу ваватс кір в укор зі гюцнал ,єьлешіР акинтя’мап улатседє’п дів юоктин юоліб ьсичюагятсорП .яром агереб икат-вунгяс нів :ясиладварпив ютсінвоп віротазінагро иналп інтібмА .»гюцнал йивиж« йинавз кат відохс хикьснікмоьтоП жводзв илировту ,икнав́ишив у хинарбу ,йедюл ьтя’вед тяседміс илок ,ідот емас ясвачопзор юлавитсеф оговокнавишиВ їіротсі їоьнтілитясед кілдіВ .инїаркУ ітсонжелазеН янД яннавуктявс етяцданмісів – утад увенпрес юц ьтюадагирп ісв ен зараз ,ьдивечоВ',
                'The reversed words text' => ' піп країни. своєї та міста рідного до любов свою і так ,єдність свою як мвсі ичюуртсномде й енергію ушна  концентруючи ,абне просто диктант итасипна ,вбрання автентичного показом помилуватися бщо ,Одеси серці самому у збираємось ми вкотре вже і ,барвами синьо-жовтими бульвар Приморський майорить вдеся́те Уже візерунків. ви́шитих його палітра ось – ніжно-зелений і жовтогарячий ,яскраво-червоний і блакитно-синій виши́ванками: имишінтінамонзірйна поповнюється герцога гардероб святковий поспіль рік Четвертий події. цієї до долучається жотак Рішельє де дюк ,речі До вдвічі. збільшилася учасників кількість адже́ ,рекордів нових встановленням запам’яталися роки два Подальші виши́ванок. море живе еннечніксне утворивши ,черга півторатисячна вишикувалася »ланцюг «Вишиванковий акції в участі для ,зливу уннипвне на ичюажавзне ,році 2014 в що ,настільки Зростало міста. українського як Одеси усвідомлення й зростало цми із разом а ,довшми усе ставав рік в року із ланцюг ,Рішельє пам’ятника п’єдесталу від ниткою білою Простягаючись моря. берега сягнув-таки він виправдалися: повністю організаторів плани Амбітні ланцюг». «живий званий так сховід Потьомкінських вздовж утворили ,виши́ванки у убраних ,людей дев’ять сімдесят коли ,тоді саме розпочався фестивалю Вишиванкового історії десятилітньої Відлік України. Незалежності Дня святкування вісімнадцяте – дату серпневу цю пригадають всі не зараз ,Вочевидь ',
            ],
            $textAnalise->analise(self::TEXT_TO_PARS),
        );
    }
}
