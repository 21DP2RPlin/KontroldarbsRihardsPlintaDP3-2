# Kas ir API?
- API ir veids, kā divas vai vairākas lietojumprogrammas var sazināties un sadarboties, izmantojot definētus protokoli un formātus. Tas var ietvert datu iegūšanu no ārējas datu bāzes, datu apstrādi un izmantošanu, un drošības pārvaldību starp sistēmām.
# Kā deklarēt mainīgo PHP valodā?
- Lai deklarētu mainīgo PHP valodā, izmantojat atslēgvārdu $, tālāk sekojot mainīgā nosaukumam. Pēc šī atslēgvārda jūs varat piešķirt vērtību, izmantojot vienkāršu vai dubultās pēdiņas, atkarībā no vērtības tipa.
# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
- Laravel izmanto Model-View-Controller (MVC) arhitektūru. MVC sadala lietojumprogrammas kodu trīs atšķirīgās kategorijās: modelis, skats un kontrolieris.
Modelis ir atbildīgs datu apstrādei, izmantojot datubāzi un biznesa logiku. Modeli izmanto, lai izveidotu, atjauninātu, izdzēstu vai apstrādātu datus.
Skats ir atbildīgs lietotāja interfeisa izveidei. Skati attēlo datus lietotājam un nodrošina interakciju ar sistēmu.
Kontrolieris veic mediju starp modeli un skatu. Kontrolieris saņem lietotāja pieprasījumus, apstrādā tos, izmantojot modeli, un pēc tam izveido skatu ar atbilstošiem datiem.
Laravel pievieno šo MVC modeli ar savām papildu funkcionalitātēm un izstrādājumu rīkiem, kas padara nodarbību ar MVC arhitektūru vieglākā un efektīvākā. Piemēram, Laravel ļauj izveidot RESTful API, izmantojot Eloquent ORM (Object-Relational Mapping) un kārtulas (routes), kas var automātiski maršrutēt pieprasījumus uz attiecīgajiem kontrolieriem.
# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
- ORM (Object-Relational Mapping) ir tehnika, kas ļauj meklēt un manipulēt datiem no datu bāzes, izmantojot objektorientēto paradigma. ORM ir izmantots, lai samazinātu izstrādātāja datu slēptu izmantošanu un padarītu kodu tīru un saprotāmu. Tā arī abstraktizē datu bāzi, kas padara datu bāzes maiņas vienkāršākām, jo ORM bibliotēkas var automatizēt daļu no datu bāzes izveidošanas un modificēšanas darbībām.
# Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. 
- use App\Models\User;
- $users = User::where('rating', '>',  4)->get();