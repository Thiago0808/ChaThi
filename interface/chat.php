<?php
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!trim($nome)){
        header("Location: index.html");
    }
    $cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
    urldecode($cor);
    if (!trim($cor)){
        header("Location: index.html");
    }
?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style_chat.css">
    <link rel="icon" href="imagens/icone.png" type="image/x-icon">
    <title>ChaThi</title>
</head>
<body>
    
    <div class="container">
        <header>
            <h1><?=$nome?></h1>
        </header>

        <main>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure quaerat ab cum sunt non libero ducimus, aliquam quis quia animi voluptate minima labore possimus architecto ullam consequuntur excepturi ut sed.</p>
            <p>Repellat magnam nihil, odit esse delectus quam quas earum. Corporis natus at numquam sed ratione error eos, animi sit illum fuga non. Est eos harum laborum architecto, perspiciatis beatae eveniet.</p>
            <p>Dolor officiis, recusandae nemo facere iusto fuga ducimus aperiam ab in vel facilis molestiae, obcaecati perferendis ad rerum vero, itaque voluptates quod quo corporis atque assumenda! Minus optio saepe tenetur!</p>
            <p>Quis, inventore modi, iste ducimus eveniet labore sint magni, perspiciatis explicabo esse tenetur quasi. Suscipit minus minima ipsam eum sequi recusandae voluptate quo similique ducimus sapiente, facilis officia id quas?</p>
            <p>Est maiores ab atque at? Quos ipsam cupiditate id illum quo molestias quae voluptatem praesentium doloribus repellendus esse, eligendi ut modi tenetur ab unde soluta sit error ipsum. Aspernatur, architecto.</p>
            <p>Inventore ut sunt doloribus, quis magni totam natus nihil saepe odio. Deleniti asperiores dolor velit iure, harum animi ex accusamus fuga unde recusandae delectus aut illo! Excepturi dicta atque sit!</p>
            <p>Porro repudiandae blanditiis illo iste id tempora nihil ex odit sunt nesciunt aut quam nobis architecto rem, ad quod labore modi est voluptatem. Dolor aliquam ipsa aperiam fugit cumque. Praesentium?</p>
            <p>Aliquam, laborum doloremque laudantium nam atque doloribus exercitationem magni sapiente quia molestiae, id obcaecati nostrum! Aperiam quasi non debitis expedita architecto voluptatem doloribus blanditiis facilis nemo! Delectus deserunt ducimus ratione.</p>
            <p>Iusto, corrupti, temporibus quam harum doloremque voluptatum velit veritatis eum quidem nostrum alias iste quod commodi eveniet, voluptates optio. Fuga iste quo enim aliquid aperiam quos iusto nihil tempora est.</p>
            <p>Soluta nihil sapiente magnam dolore repellendus, cum eveniet maiores dolores nisi fugit necessitatibus nulla quibusdam ipsa ullam provident. Quod quisquam unde expedita saepe harum repellat quis voluptatum enim eveniet exercitationem?</p>
            <p>Tempora consequatur blanditiis possimus praesentium voluptates pariatur in, illum eaque officiis qui labore inventore reiciendis provident expedita facere voluptatibus totam dicta quis delectus tempore sit. Quis placeat praesentium quos esse.</p>
            <p>Aliquam suscipit sequi porro eius facilis iure eos adipisci explicabo autem consectetur. Libero nostrum possimus itaque dolor, voluptates sit molestias architecto ipsa debitis cum accusantium. Possimus maxime minima reprehenderit doloremque.</p>
            <p>Adipisci eveniet praesentium, consequuntur voluptas debitis blanditiis labore, ad ducimus nobis vel quod voluptatem quaerat et rerum similique saepe aliquid deleniti tempore! Porro, earum cumque! Ullam eligendi quas molestias ipsum.</p>
            <p>Nam voluptas molestiae sed doloribus iure. Quaerat aliquam dolores sequi aspernatur necessitatibus ut exercitationem consequuntur eaque doloremque veritatis facilis, magni inventore voluptatum laudantium quam debitis aut quo tenetur aperiam asperiores.</p>
            <p>Eveniet, ducimus in. Pariatur voluptates, officia voluptatem ab autem aliquid laudantium, modi vero, officiis consequuntur porro enim ullam. Expedita eligendi esse aperiam iste recusandae qui necessitatibus facere, possimus pariatur obcaecati.</p>
            <p>Saepe ipsa earum, praesentium ut repellat incidunt officia eaque velit rem vero sunt totam numquam dolores rerum exercitationem, repudiandae obcaecati magnam soluta voluptatem, unde culpa a maiores illo iusto. Dolor?</p>
            <p>Architecto expedita autem corporis deleniti ipsum nostrum repellendus inventore adipisci ullam explicabo pariatur, est nesciunt excepturi sint tempora odio quas temporibus voluptatum qui cupiditate ipsa repellat in aliquid. Autem, iure?</p>
            <p>Quibusdam nesciunt deleniti officiis magnam suscipit! Repellat unde eum beatae obcaecati ea ipsam, officiis voluptas? Laboriosam corporis ut nulla consectetur? Quidem deserunt harum laborum distinctio minima tenetur recusandae maxime quibusdam.</p>
            <p>Voluptate, quia expedita! Impedit quibusdam atque suscipit qui dolore ut repellendus vero. Aliquam facilis voluptatem aperiam labore adipisci est iusto minus quaerat reprehenderit aut. Eligendi, voluptates optio. Obcaecati, voluptatum labore!</p>
            <p>Eaque porro debitis tempore dicta voluptates, voluptatibus iure ratione sunt suscipit, consectetur dolore ut aperiam amet quasi explicabo, ipsum ipsam nobis cupiditate rerum. Fugiat voluptatum nostrum doloribus nam. Est, dolor?</p>
            <p>Vel dolores magnam eaque, vitae cupiditate et corrupti, temporibus quidem quo asperiores labore mollitia, earum odio commodi consequuntur esse aliquid. Excepturi quaerat consequatur a? In similique ut numquam amet a?</p>
            <p>Laboriosam alias nemo accusamus facere, placeat cumque debitis tempora ullam maiores eius nulla cupiditate, atque id, consectetur pariatur reprehenderit fugit fuga ex aut hic nam repellat. Voluptas odio repudiandae incidunt.</p>
            <p>Molestiae culpa sequi voluptate nobis, dicta dignissimos eaque quia sit doloribus accusamus architecto necessitatibus, veritatis quisquam ex vitae eveniet itaque dolor, aliquam optio illum! At tempora et maxime dolor voluptatem!</p>
            <p>Possimus incidunt aperiam in, placeat, et consectetur amet doloremque excepturi reprehenderit, nesciunt iure vero quae totam optio facilis! Totam, dolorum eligendi veritatis vitae similique repellat eius consectetur? Animi, perspiciatis et!</p>
            <p>Suscipit vero enim voluptas ex! Qui velit, dolor in alias sed possimus est eveniet commodi iste. Sequi at obcaecati nihil expedita libero ex repellat, accusantium asperiores voluptates eligendi minus alias.</p>
            <p>Provident, accusamus officia! Eum ex tempora similique nam. Ipsum nostrum quaerat officiis minus itaque asperiores neque consequatur vitae esse eum, molestias ipsa reiciendis cumque quibusdam et expedita eligendi id velit!</p>
            <p>Minima eveniet laboriosam, repellat harum libero unde animi dolor cumque dolorum vel repudiandae fuga rem accusamus officia labore beatae natus odit? Hic soluta tempora quisquam maxime porro iure et adipisci?</p>
            <p>Amet perspiciatis sunt facilis, quaerat praesentium voluptatibus reprehenderit quia odio eius itaque omnis nihil doloribus porro. Nostrum, ad eos error culpa quod sed, reiciendis vel dicta dolores dolorem, tenetur quae.</p>
            <p>Expedita suscipit esse consequatur. Ea magni consectetur impedit mollitia sed doloremque? Fugit necessitatibus mollitia vero magnam ut vitae quas, ab accusantium deleniti, laboriosam pariatur! Nulla delectus praesentium debitis in fugit?</p>
            <p>Quidem illum veritatis quis earum quibusdam libero, optio tenetur atque! Inventore, aliquid mollitia! Molestias est optio minus aperiam obcaecati fugit a dicta quasi ad, iusto unde provident, modi id quidem?</p>
            <p>Optio corporis dicta non quis qui aliquam velit assumenda, eum deserunt fugiat, culpa rerum amet deleniti voluptates fugit harum reprehenderit ut quod inventore error corrupti? Atque nulla quisquam fugiat! Impedit.</p>
            <p>Provident quam hic vitae tempore pariatur earum blanditiis minus vero est nesciunt alias magnam distinctio iusto rem dolores mollitia doloremque commodi eum quod, facilis, saepe aut aspernatur. Ea, harum excepturi?</p>
            <p>Odio provident numquam quod delectus, recusandae quam rerum consequuntur corporis vero ipsum maxime, repellendus laudantium magni accusamus, facere voluptatum molestiae pariatur velit voluptatem iusto consequatur! Voluptatem sapiente dignissimos aliquam pariatur.</p>
            <p>Velit deleniti sed, dolorum magnam voluptatem quisquam repudiandae nobis optio repellendus eveniet accusantium aliquam doloremque dignissimos voluptates culpa officiis numquam quae, ipsum labore minima odit. Ratione recusandae dicta tempora enim.</p>
            <p>Ducimus odio unde est sed similique molestiae incidunt quibusdam repudiandae saepe itaque, ut repellendus fugiat veniam rem iure laborum! Dolor molestiae laudantium adipisci dolorum corrupti dolore sequi inventore deserunt consequuntur?</p>
            <p>Harum corrupti eum odio mollitia eligendi incidunt suscipit modi quasi aperiam culpa veniam magnam vero laborum a, provident autem, enim dolor dicta perspiciatis similique! Facere, facilis voluptatibus? Architecto, nam ullam.</p>
            <p>Quam, doloribus aperiam. Voluptatum magni laudantium expedita libero dolores porro iusto, nihil quos voluptatibus dolorem, illum qui pariatur vel sit dolore ratione quod sint, deserunt fugit cumque facere cum quia.</p>
            <p>Iure velit, et hic ut temporibus dignissimos itaque earum eligendi reiciendis, esse, blanditiis eum explicabo quam? Ipsum tenetur sint ducimus velit quia repellendus facere quos corporis, quasi, totam amet tempore.</p>
            <p>Libero aspernatur amet recusandae asperiores repudiandae accusantium hic porro. Nobis commodi est accusantium tenetur soluta, temporibus dolore asperiores nulla, distinctio assumenda et at, veritatis corrupti ex labore mollitia magnam exercitationem!</p>
            <p>Doloremque quae facere quia, necessitatibus perspiciatis exercitationem minima eum reprehenderit accusantium perferendis nesciunt error totam dicta magnam eligendi, nemo quidem incidunt dolore natus? Deserunt sed, sequi similique possimus soluta cum.</p>
            <p>Temporibus corporis soluta debitis. Inventore eius, ratione ullam assumenda laboriosam tempora sit adipisci eum dolores minus quo earum provident nam voluptas qui placeat hic? Nam pariatur deserunt esse doloribus. Iusto.</p>
            <p>Quod et quisquam debitis, quasi ut itaque, autem iusto iure magnam dicta neque ipsam nulla, aliquam vitae unde corrupti quis laudantium veniam magni. Consequatur, vitae rerum ducimus veniam dolor placeat.</p>
            <p>Libero, sequi saepe et perspiciatis a aliquam sunt, quia culpa itaque earum iusto dolor fugiat! Aperiam earum sequi illo, accusamus magni ratione rerum excepturi fuga, consequatur harum ad, beatae dicta?</p>
            <p>Architecto, assumenda! Nobis commodi reprehenderit ratione consequatur recusandae reiciendis aliquid magni velit nam atque nihil voluptatum magnam similique, exercitationem rem deleniti asperiores suscipit libero delectus! Assumenda illo officia vel beatae.</p>
            <p>Eos iste praesentium officiis laborum odio! Culpa aspernatur a eligendi inventore. Asperiores voluptate numquam necessitatibus accusamus fugiat ut, eum ullam velit, inventore suscipit voluptates, illo minus ea dignissimos. In, blanditiis?</p>
            <p>Dignissimos atque quo molestias alias vero nesciunt? Quos dignissimos adipisci architecto, vel veritatis id! Necessitatibus ab mollitia est reiciendis quo. Quidem laudantium, maxime sit nihil minima numquam debitis nisi veniam.</p>
            <p>Nesciunt, perferendis. Eligendi enim non sed repudiandae fugit ratione, neque vero. Aperiam deleniti animi iusto dolorum. Accusamus earum veritatis, impedit, delectus dicta ad ab perspiciatis rem, expedita aliquam est. Unde.</p>
            <p>Ipsum cupiditate repellendus ab nam a laudantium assumenda cum deleniti blanditiis voluptatem ratione debitis, atque doloribus nemo minima rem aspernatur vel natus ut corporis voluptatum qui officiis! Perferendis, nesciunt dolore!</p>
            <p>Enim eligendi odit temporibus sed quibusdam eveniet voluptas corrupti necessitatibus voluptatum accusantium nam dolorum, dolorem minima eius sequi eum, provident debitis cupiditate illo vitae id nihil sunt quasi eos. Commodi?</p>
            <p>Assumenda consequuntur necessitatibus quia molestias recusandae sint a eos blanditiis harum adipisci, explicabo autem saepe totam ex fugiat? Modi ratione sed inventore excepturi vero qui omnis possimus veniam id itaque!</p>
            <p>Rem voluptatem accusantium ullam. In odit dolorum libero quae quasi, repellendus, et, inventore omnis asperiores deleniti vero cumque. Dolor nobis iure cum reprehenderit, repellat sint omnis voluptatum ex in enim.</p>
            <p>Mollitia consequatur optio obcaecati modi voluptates maiores eius in ipsa explicabo neque asperiores aliquid officia sed culpa cumque reprehenderit dolorem deleniti eaque suscipit, facilis eligendi ex placeat nam. Vero, facilis.</p>
            <p>Provident saepe vel iste quae corporis sint delectus, commodi nam reprehenderit hic illum totam adipisci consectetur ad maiores asperiores accusantium sapiente, cupiditate natus? Omnis accusantium cupiditate sint tempora iste deleniti.</p>
            <p>Cumque, quo placeat. Alias, blanditiis porro vel quae repellat beatae aliquid voluptatibus, officiis esse, facilis quia! Quaerat voluptatibus et recusandae labore molestias rerum fugit doloribus, cum hic, tempore obcaecati porro.</p>
            <p>Suscipit labore nam tempore aliquid quibusdam minima delectus ipsam neque, impedit illo, quam ullam soluta quisquam a unde, veniam sit quos! Ut inventore deserunt voluptatem quam doloremque commodi dicta earum.</p>
            <p>Porro adipisci soluta rem mollitia officia debitis quam neque incidunt quos labore! Nemo itaque ratione ducimus, obcaecati laboriosam voluptates totam atque amet, officia reiciendis veritatis inventore? Mollitia consequuntur atque voluptatibus!</p>
            <p>Temporibus, blanditiis necessitatibus! Voluptatibus illum accusamus perspiciatis, impedit qui mollitia alias eius eveniet voluptate porro enim laborum nisi dolor praesentium aut aperiam! Deleniti beatae provident illo voluptate optio et incidunt!</p>
            <p>Quidem dolorem eius numquam quaerat aut ea quas saepe explicabo deserunt quia, laudantium dolor unde accusantium quo doloribus pariatur quae cupiditate consequuntur quasi inventore laboriosam iste fuga obcaecati. Molestiae, reiciendis.</p>
            <p>Aliquam tenetur consequatur, suscipit consequuntur aliquid quos reprehenderit fugiat cum neque voluptas delectus recusandae obcaecati expedita quae impedit eveniet itaque ipsa sit veritatis quaerat eligendi, facilis officiis. Ullam, inventore optio.</p>
            <p>Iure accusantium, est temporibus sint cum natus ut soluta nobis explicabo recusandae quasi reprehenderit perferendis error officiis eveniet ex corporis enim, eius itaque. Aliquam fugiat assumenda repellendus quam harum adipisci!</p>
            <p>Esse enim eos alias porro expedita! Ab atque ducimus voluptates veritatis suscipit dignissimos quis cumque cupiditate fuga molestiae, necessitatibus tempora temporibus exercitationem, adipisci repellendus culpa alias expedita totam itaque quam.</p>
            <p>Similique aspernatur possimus reiciendis, in exercitationem ratione consequatur repudiandae non deserunt, quisquam nihil ex reprehenderit provident unde est tenetur sapiente aut quidem dolore repellendus tempore ipsam quae saepe quam? Asperiores.</p>
            <p>Perferendis, neque temporibus deserunt nemo pariatur sit nesciunt sint, minima, dolorum exercitationem eveniet nihil officiis alias provident! Dolores id eius, ipsum natus officiis aut qui tempore consectetur? Voluptatibus, provident voluptates!</p>
            <p>Ipsa dignissimos libero molestiae repudiandae, aliquid illo tempore quam perferendis atque, pariatur enim quo reiciendis asperiores et adipisci vero quibusdam natus? Dolorum dolorem vero quaerat repellendus repudiandae rem veritatis odit!</p>
            <p>Minima consequatur suscipit autem veniam veritatis in sint! Cumque ea ducimus sit provident, aperiam natus amet aliquid minus. Tenetur dolorem quaerat nobis unde iure quibusdam magni blanditiis ea fugiat laboriosam?</p>
            <p>Neque, in. Placeat, iusto! Ex voluptates corporis beatae accusantium quod non placeat iusto a! Necessitatibus vero dolorum autem asperiores recusandae sit facilis tempora eius similique at aliquam debitis, voluptate tenetur.</p>
            <p>Ipsum nisi dolorem eligendi quis odio nostrum nulla. Provident quia fuga ullam esse dolor eos, autem, et molestiae aliquam laboriosam impedit cupiditate ad? Ipsa, soluta quod. Placeat fugit voluptas quod?</p>
            <p>Asperiores vero delectus nemo odit facilis veritatis consequatur et animi tenetur perferendis, ipsam possimus autem explicabo nulla ipsum atque quam accusamus, molestias laudantium. Iure ipsum accusamus consequuntur, esse quod non!</p>
            <p>Natus, deleniti. Rem, ratione voluptates temporibus sint quibusdam placeat. Voluptas facere nam dolor eum dolorem porro maiores, iste beatae quam similique veritatis sit quia, tempora sequi dolores expedita illo omnis.</p>
            <p>Laborum inventore perspiciatis quisquam officiis dolorem nihil, quis minima eaque ut quia, numquam molestiae natus dignissimos repellendus culpa, accusantium deleniti dolore dicta deserunt obcaecati facilis? Recusandae ullam dolorem odio distinctio.</p>
            <p>Reiciendis corporis dolorum, saepe sint ab aperiam repellat sequi natus aut neque amet ducimus eius ad obcaecati accusantium veritatis tempora deleniti placeat incidunt ipsum asperiores id, rerum cum! Ipsam, odio?</p>
            <p>Dolorum iure quos dolorem, velit repudiandae necessitatibus soluta quo explicabo modi fuga id corporis beatae saepe eveniet nostrum hic est quisquam rerum magni. Debitis, non dolor dignissimos libero expedita itaque.</p>
            <p>Aspernatur, minus! Aliquid similique saepe ea et, commodi, sequi quam dicta sapiente beatae consequuntur exercitationem eaque quasi ipsa rem quas, corrupti a vitae ipsum repellat? Aliquid debitis commodi odit sed.</p>
            <p>Enim quas qui facilis eaque aspernatur dolore. Ratione itaque sequi reiciendis ea assumenda dignissimos nesciunt velit beatae, expedita ullam? Magnam facilis amet nihil sed consequatur nobis earum aut quibusdam doloribus!</p>
            <p>Earum temporibus facilis impedit quae fuga consequuntur perspiciatis excepturi, quam cum repellat minus aut fugit enim reprehenderit dicta delectus quo harum voluptatibus voluptates minima repellendus tempore provident magnam dolores? Maiores.</p>
            <p>Consectetur dignissimos quia velit repellendus! Cupiditate nulla rem consectetur, quos officia modi est veritatis incidunt cumque natus voluptatem nostrum minima rerum, debitis facilis vero sapiente vel! Quis totam ratione iste.</p>
            <p>Modi rem ipsam nesciunt eum reprehenderit blanditiis corporis earum tempora est dolor perspiciatis, dolore aut pariatur error. Explicabo, dolorem provident. Vel ex neque quam impedit, id deleniti repudiandae esse soluta?</p>
            <p>Quibusdam minus molestiae ut placeat, magni officia dolore saepe nulla vero, doloribus illum. Iusto quo mollitia dignissimos, eveniet deleniti nesciunt quasi sequi iste provident, recusandae incidunt atque quam commodi autem!</p>
            <p>Fugiat nemo expedita iusto quasi nostrum. Reiciendis, quisquam molestias! Labore consequatur ea alias facilis provident totam exercitationem nisi officia vel, inventore cum consectetur pariatur? Minus placeat expedita sapiente esse repellendus.</p>
            <p>Voluptates suscipit saepe odio, nesciunt corrupti vitae iusto ipsam dignissimos unde dicta consequatur repellat similique, earum tenetur delectus perspiciatis cumque iste in nihil. Aliquam, a quos iure assumenda numquam quam!</p>
            <p>Ducimus voluptatum ipsum pariatur eveniet fugiat quae deleniti consequuntur necessitatibus nemo quos voluptatem, accusamus magni doloribus praesentium, ex, cumque odio molestias nihil minima. Sequi at repellendus fugiat consequatur rerum temporibus.</p>
            <p>Quisquam quasi, labore molestiae et veniam libero dolore explicabo tempora nihil quaerat corrupti adipisci voluptatum placeat necessitatibus? Doloribus, nihil sapiente. Atque vitae odit omnis ipsa placeat! Voluptate ut vero eaque?</p>
            <p>Similique eum esse eveniet laboriosam ex voluptas labore vero unde animi, ad laudantium error, corporis autem porro quaerat. Laborum, quas at alias totam dolor cupiditate magni aspernatur esse enim consequuntur!</p>
            <p>Nisi mollitia porro sint magni inventore. Debitis inventore impedit, nostrum quo sunt vero porro at minus voluptatem quos nesciunt, nemo deleniti, quisquam dignissimos velit. Quae minima dolores consequatur inventore officiis?</p>
            <p>Numquam ducimus, placeat, aspernatur sit consequuntur nobis accusamus facilis dignissimos fugiat laboriosam unde? Quasi nisi tenetur assumenda repellendus aut alias suscipit, voluptatem, id, unde culpa sunt quisquam? Voluptatum, nulla illo.</p>
            <p>Eveniet ad vero ducimus eum odit, nemo ex inventore neque dolores iure. Possimus facilis facere officia omnis perferendis eaque mollitia molestias sequi placeat voluptatem. Temporibus animi reprehenderit iure accusantium natus.</p>
            <p>Optio, quod deserunt. Accusantium veniam consequuntur, repudiandae dicta eligendi facere labore temporibus blanditiis fugiat ipsum quis, ratione eaque quo adipisci quasi illo unde ipsam nostrum, minima laudantium maxime reiciendis quibusdam.</p>
            <p>Recusandae minus consequatur explicabo sed, beatae officia, nemo eius dolor nam, laboriosam adipisci incidunt sint? Aliquam voluptate cumque iste tempora ducimus maiores cum perferendis voluptatibus molestias vitae! Ex, recusandae temporibus!</p>
            <p>Ipsum, iusto adipisci consectetur soluta saepe quae veritatis! Natus accusantium commodi sed atque esse architecto ad quisquam necessitatibus blanditiis nam cumque quibusdam corrupti excepturi sapiente, quod delectus totam incidunt? Autem.</p>
            <p>Atque voluptas eveniet eaque velit nulla soluta laudantium labore totam natus ex voluptatibus tenetur cupiditate odio laboriosam officia eius, accusamus odit beatae explicabo ipsum fugiat quos culpa. Doloremque, ad voluptatem.</p>
            <p>Sint, quam voluptatibus fugit suscipit sed perspiciatis? Laudantium rerum doloribus fugiat quis quibusdam esse qui sunt quia provident aperiam vero, aliquam illo autem nulla. Voluptas nesciunt eaque amet velit assumenda.</p>
            <p>Vitae, explicabo, sunt dolore deserunt ad dolores nemo fugiat tempora dicta iusto magni recusandae minus officia laborum officiis ratione natus vero voluptatum, molestiae animi eaque excepturi cum reiciendis. Voluptatum, rem!</p>
            <p>Earum necessitatibus rerum, nobis debitis in, doloremque id voluptate reprehenderit modi corporis deleniti placeat eos atque nesciunt exercitationem fuga dolor sunt, hic magni suscipit. Facere deserunt animi magnam adipisci facilis?</p>
            <p>Expedita distinctio necessitatibus minima molestiae ratione culpa quaerat laboriosam itaque iusto at harum doloribus eos, vero enim quis natus, magnam sed et eum corporis, provident cum consequuntur impedit! Debitis, facilis.</p>
            <p>Perspiciatis quos dolore odit odio molestiae excepturi impedit harum maxime corrupti, voluptate, eveniet possimus. Nihil tenetur vel dolor fuga, iste ratione itaque commodi minima deleniti corrupti est ut labore saepe?</p>
            <p>Excepturi ullam fuga modi. Autem, labore rerum. Voluptatum ipsum aut recusandae corrupti ullam repudiandae quidem rerum, delectus iure ipsa temporibus suscipit, quisquam animi dolorum aliquam voluptate qui sapiente veniam aspernatur.</p>
            <p>Voluptate deleniti similique laborum quas fuga! Dolores sint quam perferendis praesentium vel ratione cupiditate eius quae magni dolore quisquam laborum possimus error excepturi, explicabo ea ipsa tenetur nostrum maiores? Accusamus!</p>
            <p>Eum ex facilis perferendis sequi provident dolore nostrum, quisquam laborum necessitatibus aspernatur officia enim illo error illum iure harum laboriosam id fugiat ut cumque voluptatibus repellendus. Minus perspiciatis facere tempore?</p>
            <p>Incidunt tempore, neque quia expedita nobis voluptatum magnam ut voluptates necessitatibus reiciendis temporibus rem accusamus suscipit molestiae doloribus unde doloremque corporis quo quos esse odio impedit? Iure autem culpa omnis.</p>
            <p>Asperiores voluptates dicta ipsa perspiciatis quasi? Fugiat, corrupti soluta. Molestiae ullam quisquam quod, similique maxime vel labore cupiditate officia cum magni, incidunt totam cumque nostrum, voluptatibus illum corrupti omnis explicabo!</p>
        </main>

        <script>
            function scroll() {
                let main=document.querySelector("main");
                main.scrollTop=main.scrollHeight;
            }

            scroll();
        </script>

        <form action="../PHP/recebe.php" method="get">
            <input type="hidden" name="nome" value=<?=$nome?>>
            <input type="hidden" name="cor" value=<?=$cor?>>
            <div class="enviar-mensagem">
                <div class="input-group">
                    <textarea placeholder="Digite aqui..." class="form-control col-12" aria-label="With textarea" name="texto"></textarea>
                </div>
                <div class="botao">
                    <input type="submit" value="Enviar"  class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

     <!-- Boostrap -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>