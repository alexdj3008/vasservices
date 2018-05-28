<?php

use Illuminate\Database\Seeder;
use App\Clinica;
class ClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clinica::truncate();
        
                $clinica = new Clinica;
                $clinica->rif="J-07501338-7";
                $clinica->nombre="Clínica Razetti";
                $clinica->descripcion="En la Clínica Razzeti de Barquisimeto ofrecemos servicio médico permanente las 24 horas y los 365 días del año en áreas especializadas. Contamos con: densitometría ósea, emergencia, fecundar, hospitalización, laboratorio clínico, odontología/ortodoncia, quirófano, radiología e imágenes, radiología intervencionista, resonancia magnética, sala de partos, servicio farmacéutico, tomografía, ultrasonido, unidad de cirugía ambulatoria, unidad de cuidados intensivos, unidosis, hemodinamia, unidad de mezclas, unidad de quimioterapia. Contamos también con un amplio directorio médico. Visítenos y compruebe nuestra calidad en servicio.";
                $clinica->estado_id=13;
                $clinica->direccion="Lara, Barquisimeto, Cr. 21 Esquina calle 27 y 28, Edificio Clínica Razetti, Nivel -, Apto. -, Sector Centro";
                $clinica->email="clinicarazetti@yahoo.com";
                $clinica->estatus='A';
                $clinica->save();
        
                $clinica = new Clinica;
                $clinica->rif="J-00019982-5";
                $clinica->nombre="Clínica Acosta Ortiz, C.A.";
                $clinica->descripcion="La Clínica Acosta Ortiz es una institución de salud que ocupa una posición estable de reconocido prestigio en la región. Durante 60 años, hemos ofrecido una medicina privada de gran calidad científica y humana. Esta ha sido una tradición transmitida desde varias generaciones de médicos, personal paramédico y administrativo que hemos cultivado, incentivado y mantenido. Podemos decir con orgullo que en Clínica Acosta Ortiz contamos con un equipo de trabajo calificado, los cuales estamos seguro les brindará la atención que usted se merece.";
                $clinica->estado_id=13;
                $clinica->direccion="Lara, Barquisimeto, Cr. 19, entre, Cl. 30y 31, Edificio Acosta Ortiz, Piso Pb, Local 30-78, Urbanización Centro";
                $clinica->email="informacion@acostaortiz.com";
                $clinica->estatus='A';
                $clinica->save();
        
                $clinica = new Clinica;
                $clinica->rif="J-00310581-2";
                $clinica->nombre="Clínica Cemo, C.A.";
                $clinica->descripcion="Clínica Cemo, C.A. Es una clínica con 27 años de funcionamiento dedicada al ramo de la salud, con una alta vocación de servicio a nuestros pacientes. Clínica Cemo brinda los servicios médicos de emergencia y hospitalización, atención primaria de salud, así como tomografías, resonancias magnéticas, rayos X, laboratorios, mamografías, desintometría ósea, ecosonogramas, ultrasonidos 3D y 4D y ecocardiogramas, entre otros. Y como un plus, Clínica Cemo cuenta con los mejores profesionales en sus especialidades médicas.";
                $clinica->estado_id=10;
                $clinica->direccion="Distrito Capital, Caracas, Av. Arturo Michelena, entre, Av. Reinaldo Han Y Simón Planas, Edificio Clínica Cemo, Piso PB, Apto. s/n, Urbanización Santa Mónica";
                $clinica->email="cemo.admision@hotmail.com";
                $clinica->estatus='A';
                $clinica->save();
        
                $clinica = new Clinica;
                $clinica->rif="J-30866441-3";
                $clinica->nombre="Unidad Clínica de Especialidades de Oriente, C.A.";
                $clinica->descripcion="Unidad Clínica de Especialidades de Oriente, C.A., es una clínica con servicio de salud integral, consultas de todas las especialidades, con servicios de laboratorio, hospitalización, rayos x. La Unidad Clínica de Especialidades de Oriente, C.A., se encuentra ubicado en pleno corazón de Barcelona, para brindarle una atención médica altamente calificada las 24 horas del día.";
                $clinica->estado_id=2;
                $clinica->direccion="Anzoátegui, Barcelona, Av. Country Club, Edificio Unidad Clínica de Especialidades de Oriente, Piso PB, Local S/N, Urbanización Urdaneta";
                $clinica->email="jesusnateranr@gmail.com";
                $clinica->estatus='A';
                $clinica->save();
        
                $clinica = new Clinica;
                $clinica->rif="J-30237762-5";
                $clinica->nombre="Clínica Santa F";
                $clinica->descripcion="En Clínica Santa Fe, C.A. ofrecemos un servicio de primera en cuanto a consultas médicas se refiere, tanto en especialidades como laboratorio clínico, imagenealogía (ecosonograma, Rx, tomografías), estudios cardiológicos, holter, mapa de tensión arterial, tomas de muestra citológica, biopsias eco-dirigida, aplicación de terapias inmunológicas y quimioterapia; además tenemos servicio de emergencias las 24 horas. Estamos conformados por un grupo de profesionales de la salud comprometidos con la prestación de servicio médico de calidad. Estamos legales en cuanto a la higiene y seguridad con la idea de ser reconocidos como los especialistas en ofrecer el mejor servicio.";
                $clinica->estado_id=13;
                $clinica->direccion="Lara, Barquisimeto, Av. Vargas Sur c/c Av. Uruguay, Edificio Clínica Santa Fe, Nivel ., Local .";
                $clinica->email="clinicasantafe@cantv.net";
                $clinica->estatus='A';
                $clinica->save();
        
                 $clinica = new Clinica;
                $clinica->rif="J-30224751-9";
                $clinica->nombre="Clínica Idet, C.A.";
                $clinica->descripcion="Clínica Idet, C.A.; somos un centro de salud integral con más de 19 años de servicio y experiencia siendo pioneros en medicina corporativa, medicina preventiva, diagnóstico y tratamiento integral de patologías varias, mediante la búsqueda permanente de la excelencia en los procesos curativos de investigación e innovación, y prestando un servicio de alta calidad, con la mística y profesionalismo de nuestro personal. Brindamos servicios médicos óptimos, económicos y de alta confiabilidad para nuestros pacientes. Ofrecemos nuestros servicios médicos, tanto a los particulares como a empresas con el respaldo de un equipo de profesionales altamente calificados.";
                $clinica->estado_id=10;
                $clinica->direccion="Distrito Capital, Caracas, Av. Luis Roche, Edificio Mansión Avila, Piso 4 Y 5, Apto. n/a, Urbanización Altamira";
                $clinica->email="clinicaidet@clinicaidet.com.ve";
                $clinica->estatus='A';
                $clinica->save();
        
                 $clinica = new Clinica;
                $clinica->rif="J-06507063-3";
                $clinica->nombre="Centro Médico Quirúrgico La Fe, C.A";
                $clinica->descripcion="Clínica Idet, C.A.; somos un centro de salud integral con más de 19 años de servicio y experiencia siendo pioneros en medicina corporativa, medicina preventiva, diagnóstico y tratamiento integral de patologías varias, mediante la búsqueda permanente de la excelencia en los procesos curativos de investigación e innovación, y prestando un servicio de alta calidad, con la mística y profesionalismo de nuestro personal. Brindamos servicios médicos óptimos, económicos y de alta confiabilidad para nuestros pacientes. Ofrecemos nuestros servicios médicos, tanto a los particulares como a empresas con el respaldo de un equipo de profesionales altamente calificados.";
                $clinica->estado_id=17;
                $clinica->direccion="Nueva Esparta, Porlamar, Av. Jóvito Villalba, Edificio Ctro Med. La Fe, Nivel PB, Local La Fe, Urbanización Jorge Coll";
                $clinica->email="rafaelrodriguez@clinicalafe.com";
                $clinica->estatus='A';
                $clinica->save();
        
                 $clinica = new Clinica;
                $clinica->rif="J-00006918-2";
                $clinica->nombre="Clinica Calicanto,C.A.";
                $clinica->descripcion="Clínica Calicanto C.A., Es una institución dedicada a prestar un excelente servicios de salud privada, garantizando el estado de salud del paciente durante su estadía en la clínica, apoyados por un personal altamente calificado, unas excelentes instalaciones y tecnología de vanguardia. Clínica Calicanto C.A. Coloca a disposición los servicios de Tomografía, Ecografía, Laboratorio Análisis de rutina y Especializados, Maternidad y Servicios de hospitalización, Cirugías, Terapia Intensiva y Neonatología, Contamos con servicio de Emergencia Adulto y Pediátrica las 24 horas. Décadas de excelente desempeño y apoyo al sistema de salud nacional, hacen de Clínica Calicanto una de las mejores alternativas médicas de la región central de nuestro país.";
                $clinica->estado_id=4;
                $clinica->direccion="Aragua, Maracay, Av. Sucre, Edificio 43, Nivel ., Apto. ., Urbanización Calicanto";
                $clinica->email="gerenciadeservicios@clinicacalicanto.com.ve";
                $clinica->estatus='A';
                $clinica->save();
        
                 $clinica = new Clinica;
                $clinica->rif="2";
                $clinica->nombre="Policlínica Táchira Hospitalización, C.A.";
                $clinica->descripcion="Policlínica Táchira Hospitalización, C.A. Somos una empresa prestadora de servicio de salud, privada con 78 años de experiencia en el ramo, concebida y proyectada a los constantes descubrimientos de la ciencia y la tecnología, contando para esto con servicios especiales, equipos avanzados y un personal capacitado y dedicado a la prevención, tratamiento y rehabilitación de la salud. En la actualidad la clínica, funciona en las instalaciones de su empresa matriz Policlínica Táchira C.A.; con la que mantiene una asociación estratégica y, ésta última, es la encargada de la adecuación de los espacios físicos conforme a normas, requerimientos técnicos y requisitos arquitectónicos.";
                $clinica->estado_id=20;
                $clinica->direccion="Táchira, San Cristóbal, Av. 19 de Abril, Edificio Policlínica Táchira, Nivel n/a, Local n/a, Urbanización La Rotaria";
                $clinica->email="buzon@policlinicatachira.com.ve";
                $clinica->estatus='A';
                $clinica->save();
        
                 $clinica = new Clinica;
                $clinica->rif="J-40404472-8";
                $clinica->nombre="Consultorio Odontológico Arte y Salud Dental";
                $clinica->descripcion="En nuestro Consultorio Odontológico Arte y Salud Dental estamos especializados para atender las más altas exigencias en cuanto a salud buco-dental. Usted encontrará un ambiente total de esterilización y de seguridad de praxis odontológica. Somos una clínica odontología integral que cuenta con especialistas en las diferentes áreas de la odontología; dotada de tres (3) unidades odontológicas y equipo de radiografía periapical de última generación. Nuestro compromiso es ofrecerles a nuestros pacientes una máxima calidad de atención dental a precios accesibles. Si necesita asistencia especial, contacte a Consultorio Odontológico Arte y Salud Dental y hágale saber a nuestros profesionales o al personal de asistentes su solicitud, quienes con gusto atenderán sus requerimientos.";
                $clinica->estado_id=18;
                $clinica->direccion="Portuguesa, Acarigua, Av. 18, cruce con, Cl. 30 Y 31, Centro Comercial Millenium, Piso 2, Local P2 15, Urbanización Centro";
                $clinica->email="carolinacolina04-12-89@hotmail.com";
                $clinica->estatus='A';
                $clinica->save();
        
        
    }
}
