<?php

use Illuminate\Database\Seeder;
use App\TipoCirugia;
use App\Especialidad;

class TiposCirugiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoCirugia::truncate();

    	$tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 1;
        $tipocirugia->nombre="Operación de varices con láser endovenoso (Una pierna)";
        $tipocirugia->descripcion="La operación de varices con láser endovenoso permite eliminar los problemas asociados a las varices sin necesidad de extirpar la vena afectada. Esto es posible al introducir una fibra láser por la vena atacando sólo al tejido venoso afectado, lo que permite al paciente volver a casa andando el mismo día. En esta página te explicamos lo que necesitas saber sobre la cirugía de varices con láser.";
        $tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 1;
        $tipocirugia->nombre="Hemorroides (extirpación)";
		$tipocirugia->descripcion="Las hemorroides son un problema tan común como molesto. Éstas aparecen en la zona del ano y su causa puede deberse a diferentes factores. Los síntomas pueden paliarse con cambios de comportamiento o medicamentos, pero en los casos graves la mejor opción para mejorar la calidad de vida es la cirugía.";
 		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 1;
        $tipocirugia->nombre="Fisura anal, tratamiento quirúrgico, resección esfinterotomía";
        $tipocirugia->descripcion="La Operación de Fisura Anal, Tratamiento quirúrgico, resección, esfinterotomía, se realiza para solucionar el problema de la Fisura Anal. Éstas se suelen confundir con hemorroides, pero en realidad es una herida que provoca un dolor intenso durante y a lo largo de las horas siguientes a la defecación. Un alto porcentaje de las Fisuras Anales no mejoran con otros tratamientos, por lo que es imprescindible la cirugía para mejorar la calidad de vida del paciente.";
        $tipocirugia->estatus='A';
        $tipocirugia->save();

        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 2;
        $tipocirugia->nombre="Implante Dental de Titanio con Corona de Cerámica";
		$tipocirugia->descripcion="La cirugía de implantes dentales es un procedimiento de colocación y restauración de piezas artificiales para solucionar los problemas provocados por la pérdida de dientes. Estos problemas pueden deberse a diversos motivos como las enfermedades periodontales o casos graves de caries, problemáticas que causan el desgaste de los dientes, su movimiento y consecuente caída.";        
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 2;
        $tipocirugia->nombre="Prótesis Híbrida Superior sobre 6 Implantes";
		$tipocirugia->descripcion="La prótesis híbrida sobre 6 implantes se coloca principalmente en la arcada superior.  Esta prótesis se mantiene fija en el maxilar, permitiéndote recuperar la función de masticar, la apariencia estética y sobre todo, la sensación de que conservas los dientes, al ser una prótesis que se mantiene en la boca y proporciona soporte al labio superior.";        
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 2;
        $tipocirugia->nombre="Sobredentadura inferior sobre 2 implantes (anclajes locator)";
		$tipocirugia->descripcion="La sobredentadura inferior es un tipo de prótesis implantomucosuportada que implica la sujeción de la misma a la mandíbula mediante dos implantes de titanio a la vez que se apoya en la encía y mucosa oral.";        
		$tipocirugia->estatus='A';
        $tipocirugia->save();

		$tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 3;
        $tipocirugia->nombre="Mamoplastia de aumento con prótesis anatómicas";
		$tipocirugia->descripcion="La cirugía de mamoplastia de aumento con prótesis (aumento de pecho) es la intervención de Cirugía Plástica y Reparadora que más se realiza en nuestro país. En este caso, la intervención implica la implantación de una prótesis mamaria de gel de silicona de alta cohesividad en el pecho de la paciente para aumentar el busto. En esta página hablaremos de la cirugía de aumento de pecho con prótesis anatómicas.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 3;
        $tipocirugia->nombre="Operación de aumento de pecho con prótesis redondas";
		$tipocirugia->descripcion="La operación de aumento de pecho con prótesis mamaria (mamoplastia) es la intervención de cirugía estética más realizada en España. Consiste en la implantación de una prótesis mamaria en el pecho de la mujer para aumentar su busto, consiguiendo así una mejora estética en las mujeres que la desean. En esta página explicamos todo lo que necesitas saber sobre la cirugía de mamoplastia con prótesis redonda.";        
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 3;
        $tipocirugia->nombre="Blefaroplastia de párpados superiores e inferiores";
		$tipocirugia->descripcion="a operación de blefaroplastia o cirugía de párpados, consiste en la reparación de dichos párpados que debido a la edad u otras razones han sufrido un visible deterioro como es la caída de los párpados superiores o la aparición de bolsas de grasa en los párpados inferiores. Esto conlleva un perjuicio estético y en muchos casos, una disminución del rango de visión. Esta cirugía puede hacerse en los párpados superiores, en los inferiores o en todos a la vez y es la única solución permanente para sus síntomas.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save();


        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 4;
        $tipocirugia->nombre="Operación de histerectomía abdominal (extirpar útero)";
        $tipocirugia->descripcion="La operación de histerectomía abdominal es la intervención quirúrgica convencional mediante la cuál se procede a extirpar el útero y las estructuras anejas debido a alguna patología, ya sea de carácter benigno o maligno. La histerectomía abdominal se diferencia del resto de técnicas, laparoscopia y vaginal, en que en este caso el abordaje quirúrgico se realiza a través de una incisión en la parte inferior del abdomen.";
        $tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 4;
        $tipocirugia->nombre="Operación de histerectomía vaginal";
        $tipocirugia->descripcion="La operación de histerectomía vaginal para la extirpación del útero permite llevarlo a cabo sin dejar cicatrices visibles en la paciente, ya que el abordaje es desde la vagina. Con esta técnica se puede tratar tanto crecimientos malignos como benignos, siendo su principal ventaja la reducción de la estancia hospitalaria a tan sólo 2 días y la reducción de los días de postoperatorio. La histerectomía vaginal es la técnica quirúrgica recomendada para la extirpación del útero, siempre y cuando sea factible según las características de la paciente.";
        $tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 4;
        $tipocirugia->nombre="Operación de histerectomía laparoscópica (extirpación de útero)";
        $tipocirugia->descripcion="La operación de histerectomía laparoscópica para la extirpación del útero permite llevarlo a cabo sin dejar cicatrices visibles en la paciente. Con esta técnica se puede tratar tanto crecimientos malignos como benignos, siendo su principal ventaja la reducción de la estancia hospitalaria a tan sólo 2 días y la reducción de los días de postoperatorio. El abordaje de esta técnica quirúrgica se realiza a través de 3 pequeñas incisiones en el abdomen y en algunos casos, una incisión de apoyo en el fondo de la vagina.";
        $tipocirugia->estatus='A';
        $tipocirugia->save(); 

		$tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 5;
        $tipocirugia->nombre="Operación de cataratas con lente intraocular trifocal";
        $tipocirugia->descripcion="La operación de cataratas con lente intraocular trifocal consiste en la sustitución del cristalino afectado por cataratas por una lente intraocular que permite ver a tres distancias, corta, media y larga. Se trata de una operación rápida que dura alrededor de 20 minutos, pudiendo el paciente abandonar el hospital poco después de la cirugía. Para conocer todo sobre la operación de cataratas con lente intraocular trifocal puedes continuar leyendo a continuación.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 5;
        $tipocirugia->nombre="Operación de Miopía con Láser (Cirugía Lasik)";
        $tipocirugia->descripcion="La miopía es un defecto refractivo ocular que se debe a un problema congénito de tamaño del ojo, deformación de la córnea o del cristalino. Para solucionarla es necesario el uso de gafas o lentes de contacto, aunque otra opción más cómoda y rápida es la operación de corrección de la miopía con láser (Cirugía Lasik).";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 5;
        $tipocirugia->nombre="Operación de Vista Cansada con Lente Multifocal (Presbicia)";
        $tipocirugia->descripcion="La Vista Cansada o Presbicia afecta a gran parte de las personas mayores de 45 años, llegando casi al 100% en personas que superan los 65 años. Para solucionar este problema existen dos soluciones, el uso de gafas o la cirugía, siendo ésta última la opción más cómoda.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 

        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 6;
        $tipocirugia->nombre="Cirugía endoscópica nasosinusal unilateral (sinusitis o pólipos)";
        $tipocirugia->descripcion="La cirugía endoscópica nasosinusal (CENS) consiste en la resección del tejido anormal u obstructivo que bloquea el correcto funcionamiento de las vías nasales y sinusales. Con esta cirugía se consigue corregir los problemas respiratorios y mejorar la calidad de vida del paciente, solucionando patologías como sinusitis, rinitis, pólipos e incluso, tumores nasales. En esta página encontrarás toda la información que necesitas sobre la cirugía endoscópica nasosinusal.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 6;
        $tipocirugia->nombre="Operación de amigdalectomía (Extirpación de amígdalas)";
        $tipocirugia->descripcion="La cirugía de amigdalectomía consiste en la extirpación de las amígdalas para solucionar problemas como infecciones recurrentes, apnea del sueño, dificultad para respirar u otros síntomas que afectan a la calidad de vida del paciente, normalmente un niño pequeño. En esta página encontrarás toda la información que necesitas sobre la operación de amigdalectomía.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 6;
        $tipocirugia->nombre="Cirugía de timpanoplastia (reparación del tímpano)";
        $tipocirugia->descripcion="La cirugía de timpanoplastia consiste en la reconstrucción del tímpano dañado, ya sea por una otitis media cónica o a causa de un traumatismo en la zona. Gracias a esta cirugía se consigue restaurar la membrana timpánica y mejorar la audición, además de evitar nuevas infecciones del oído y mejorar la calidad de vida del paciente. En esta página encontrarás toda la información necesaria sobre la cirugía de timpanoplastia.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 


        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 7;
        $tipocirugia->nombre="Prótesis total de Cadera (Artroplastia)";
        $tipocirugia->descripcion="La operación de prótesis total de cadera (Artroplastia) consiste en la sustitución completa de la cadera por una articulación artificial. La edad y la artrosis pueden causar un deterioro grave en la articulación provocando dolores y dificultades para realizar actividades cotidianas como andar e incluso dormir. La operación de prótesis de cadera tiene como principal objetivo mejorar la calidad de vida del paciente.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 7;
        $tipocirugia->nombre="Prótesis total de Rodilla (Artroplastia)";
        $tipocirugia->descripcion="Con la edad y la artrosis, las articulaciones se resienten, desgastándose y provocando malestar, dolor e incluso impidiendo llevar una vida normal. En estos casos, la mejor opción para mejorar la calidad de vida es la operación de prótesis de rodilla.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save();
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 7;
        $tipocirugia->nombre="Síndrome del Tunel Carpiano";
        $tipocirugia->descripcion="La Operación de Síndrome del Túnel Carpiano consiste en la solución de dicho síndrome, el cual impide a los que lo sufren un movimiento libre de la muñeca sin dolor. Esto se debe a la compresión que sufre el nervio que atraviesa el túnel carpiano, situado en la cara palmar de la muñeca. Se caracteriza por una sensación de hormigueo y dolor en el primer dedo, el segundo y el tercero, siendo la única solución definitiva la cirugía.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save();

        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 8;
        $tipocirugia->nombre="Vasectomía";
        $tipocirugia->descripcion="La Vasectomía es una Operación quirúrgica optativa cuya finalidad es la infertilidad del hombre. Esta sencilla cirugía se realiza como método de control de la natalidad y es irreversible, por lo que los médicos recomiendan que sea una decisión meditada.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 8;
        $tipocirugia->nombre="Fimosis, circuncisión";
        $tipocirugia->descripcion="La Operación de Fimosis o Circuncisión, consiste en la eliminación del prepucio, que es la piel que recubre el glande del pene. Esta operación lleva una serie de ventajas asociadas. Además de ser realizada como ritual en numerosas culturas, se recomienda en algunos casos por problemas médicos.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 
        $tipocirugia = new TipoCirugia;
        $tipocirugia->especialidad_id = 8;
        $tipocirugia->nombre="Operación de Cáncer de Próstata con Robot Da Vinci (Prostatectomía Radical)";
        $tipocirugia->descripcion="La Operación de Cáncer de Próstata con Robot Da Vinci es la cirugía más avanzada tecnológicamente para tratar el cáncer de próstata. El Robot Da Vinci permite llevar a cabo la operación de forma mínimamente invasiva, lo cual permite ventajas de recuperación para el paciente, menor pérdida de sangre y reducción del riesgo de infección, a la vez que habilita al cirujano a llevar a cabo una cirugía con precisión milimétrica, siendo la efectividad de esta cirugía igual o superior a la Prostatectomía Radical Abierta.";		
		$tipocirugia->estatus='A';
        $tipocirugia->save(); 




    }
}

