<?php

use App\Category;
use App\Corporative;
use App\Enterprise;
use App\It;
use App\Perspective;
use App\Process;
use Illuminate\Database\Seeder;

class CorporativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Perspectives
        Perspective::create([
            'name' => 'Financiera'
        ]);
        Perspective::create([
            'name' => 'Cliente'
        ]);
        Perspective::create([
            'name' => 'Procesos Internos'
        ]);
        Perspective::create([
            'name' => 'Aprendizaje y desarrollo'
        ]);

        //Corporative Goals
        Corporative::create([
            'name' => 'Valor de las partes interesadas de las inversiones de negocio',
            'perspective_id' =>1,
            'benefit'=>1
        ]);
        Corporative::create([
            'name' => 'Cartera de productos y servicios competitivos',
            'perspective_id' =>1,
            'benefit'=>1,
            'risk'=>1
        ]);
        Corporative::create([
            'name' => 'Riesgos de negocio gestionados(salvaguarda de activos)',
            'perspective_id' =>1,
            'risk'=>1
        ]);
        Corporative::create([
            'name' => 'Cumplimiento de leyes y regulaciones externas',
            'perspective_id' =>1,
            'risk'=>1
        ]);
        Corporative::create([
            'name' => 'Transpariencia financiera',
            'perspective_id' =>1,
            'benefit'=>1
        ]);

        Corporative::create([
            'name' => 'Cultura de servicio orientado al cliente',
            'perspective_id' =>2,
            'benefit'=>1
        ]);
        Corporative::create([
            'name' => 'Continuidad y disponibilidad del servicio de negocio',
            'perspective_id' =>2,
            'risk'=>1
        ]);
        Corporative::create([
            'name' => 'Respuestas ágiles a un entorno de negocio cambiante',
            'perspective_id' =>2,
            'benefit'=>1
        ]);
        Corporative::create([
            'name' => 'Toma estratégica de decisiones basada en información',
            'perspective_id' =>2,
            'benefit'=>1,
            'risk'=>1,
            'resource'=>1
        ]);
        Corporative::create([
            'name' => 'Optimización de costes de entrega del servicio',
            'perspective_id' =>2,
            'benefit'=>1,
            'resource'=>1
        ]);

        Corporative::create([
            'name' => 'Optimización de la funcionalidad de los procesos de negocio',
            'perspective_id' =>3,
            'benefit'=>1,
            'resource'=>1
        ]);
        Corporative::create([
            'name' => 'Optimización de los costes de los procesos de negocio',
            'perspective_id' =>3,
            'benefit'=>1,
            'resource'=>1
        ]);
        Corporative::create([
            'name' => 'Programas gestionados de cambio en el negocio',
            'perspective_id' =>3,
            'benefit'=>1,
            'risk'=>1
        ]);
        Corporative::create([
            'name' => 'Productividad operacional y de los empleados',
            'perspective_id' =>3,
            'benefit'=>1,
            'resource'=>1
        ]);
        Corporative::create([
            'name' => 'Cumplimiento con las políticas internas',
            'perspective_id' =>3,
            'risk'=>1,
        ]);

        Corporative::create([
            'name' => 'Personas preparadas y motivadas',
            'perspective_id' =>4,
            'risk'=>1,
            'resource'=>1
        ]);
        Corporative::create([
            'name' => 'Cultura de innovación de producto y negocio',
            'perspective_id' =>4,
            'benefit'=>1
        ]);

        // Enterprise Goals
        Enterprise::create([
            'name' => 'Incrementar nivel de utilidades',
            'perspective_id' =>1,
            'user_id'=>1
        ]);
        Enterprise::create([
            'name' => 'Alcanzar un alto nivel de satisfacción del usuario',
            'perspective_id' =>2,
            'user_id'=>1
        ]);
        Enterprise::create([
            'name' => 'Ser una empresa líder que se desenvuelva bajo los estándares internacionales de calidad',
            'perspective_id' =>3,
            'user_id'=>1
        ]);
        Enterprise::create([
            'name' => 'Tener la mayor efectividad del mercado de servicio de encomiendas',
            'perspective_id' =>3,
            'user_id'=>1

        ]);
        Enterprise::create([
            'name' => 'Tener tecnologías de información que impulsan el crecimiento de la organización',
            'perspective_id' =>3,
            'user_id'=>1
        ]);
        Enterprise::create([
            'name' => 'Definir un plan de capacitación del personal en todos los niveles',
            'perspective_id' =>4,
            'user_id'=>1
        ]);
        Enterprise::create([
            'name' => 'Contar con todas las áreas productivas trabajando de forma ordenada y eficiente',
            'perspective_id' =>4,
            'user_id'=>1
        ]);

        //It Goals
        It::create([
            'name' => 'Alineamiento de TI y estrategia de negocio',
            'perspective_id' =>1
        ]);
        It::create([
            'name' => 'Cumplimineto y soporte de la TI al cumplimiento del negocio de las leyes y regulaciones externas',
            'perspective_id' =>1
        ]);
        It::create([
            'name' => 'Compromiso de dirección ejecutiva para tomar decisiones relacionadas con TI',
            'perspective_id' =>1
        ]);
        It::create([
            'name' => 'Riesgos de negocio relacionados con las TI gestionadas',
            'perspective_id' =>1
        ]);
        It::create([
            'name' => 'Realización de beneficios de portafolio de inversiones y servicios relacionados con las TI',
            'perspective_id' =>1
        ]);
        It::create([
            'name' => 'Transpariencia de los costes, beneficios y riesgos de las TI',
            'perspective_id' =>1
        ]);

        It::create([
            'name' => 'Entrega de servicios de TI de acuerdo a los requisitos del negocio',
            'perspective_id' =>2
        ]);
        It::create([
            'name' => 'Uso adecuado de aplicaciones, información y soluciones tecnológicas',
            'perspective_id' =>2
        ]);

        It::create([
            'name' => 'Agilidad de las TI',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Seguridad de la información, infraestructura de procesamiento de aplicaciones',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Optimización de activos, recursos y capacidades de TI',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Capacitación y soporte de procesos de negocio integrado aplicaciones y tenoclogía de procesos de negocio',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Entrega de programas que proporcionen beneficios a tiempo, dentro del presupuesto y satisfaciendo los requisitos y normas de calidad',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Disponibilidad de información útil y fiable para la toma de decisiones',
            'perspective_id' =>3
        ]);
        It::create([
            'name' => 'Cumplimiento de las políticas internas por parte de las TI',
            'perspective_id' =>3
        ]);

        It::create([
            'name' => 'Personal del negocio y de las TI competente y motivado',
            'perspective_id' =>4
        ]);
        It::create([
            'name' => 'Conocimiento, experiencia e iniciativas para la innovación de negocio',
            'perspective_id' =>4
        ]);

        //Category process
        Category::create([
            'name'=>'Evaluar, Orientar y Supervisar'
        ]);
        Category::create([
            'name'=>'Alinear, Planificar y Organizar'
        ]);
        Category::create([
            'name'=>'Construccion, Adquisición e Implementación'
        ]);
        Category::create([
            'name'=>'Entregar, dar Servicio y Soporte'
        ]);
        Category::create([
            'name'=>'Supervisión, Evaluación y Verificación'
        ]);

        //Process
        Process::create([
            'code'=>'EDM01',
            'name'=>'Asegurar el Establecimiento y Mantenimiento del Marco de Gobierno',
            'category_id'=>1
        ]);
        Process::create([
            'code'=>'EDM02',
            'name'=>'Asegurar la Entrega de Beneficios',
            'category_id'=>1
        ]);
        Process::create([
            'code'=>'EDM03',
            'name'=>'Asegurar la Optimización del Riesgo',
            'category_id'=>1
        ]);
        Process::create([
            'code'=>'EDM04',
            'name'=>'Asegurar la Optimizacion de los Recursos',
            'category_id'=>1
        ]);
        Process::create([
            'code'=>'EDM05',
            'name'=>'Asegurar la Transparencia hacia las partes interesadas',
            'category_id'=>1
        ]);

        Process::create([
            'code'=>'APO01',
            'name'=>'Gestionar el Marco de Gestión de TI',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO02',
            'name'=>'Gestionar la Estrategia',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO03',
            'name'=>'Gestionar la Arquitectura Empresarial',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO04',
            'name'=>'Gestionar la Innovación',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO05',
            'name'=>'Gestionar el Portafolio',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO06',
            'name'=>'Gestionar el Presupuesto y los Costes',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO07',
            'name'=>'Gestionar los Recursos Humanos',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO08',
            'name'=>'Gestionar las Relaciones',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO09',
            'name'=>'Gestionar los acuerdos de Servicio',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO10',
            'name'=>'Gestionar los Proveedores',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO11',
            'name'=>'Gestionar la Calidad',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO12',
            'name'=>'Gestionar el Riesgo',
            'category_id'=>2
        ]);
        Process::create([
            'code'=>'APO13',
            'name'=>'Gestionar la Seguridad',
            'category_id'=>2
        ]);

        Process::create([
            'code'=>'BAI01',
            'name'=>'Gestionar los Programas y Proyectos',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI02',
            'name'=>'Gestionar la Definición de Requisitos',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI03',
            'name'=>'Gestionar la Identificación y Construcción de Soluciones',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI04',
            'name'=>'Gestionar la Disponibilidad y la Capacidad',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI05',
            'name'=>'Gestionar la Introducción de Cambios Organizativos',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI06',
            'name'=>'Gestionar los Cambios',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI07',
            'name'=>'Gestionar la Aceptación del Cambio y de la Transición',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI08',
            'name'=>'Gestionar el Conocimiento',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI09',
            'name'=>'Gestionar los Activos',
            'category_id'=>3
        ]);
        Process::create([
            'code'=>'BAI10',
            'name'=>'gestionar la Configuración',
            'category_id'=>3
        ]);

        Process::create([
            'code'=>'DSS01',
            'name'=>'Gestionar las Operaciones',
            'category_id'=>4
        ]);
        Process::create([
            'code'=>'DSS02',
            'name'=>'Gestionar las Peticiones y los Incidentes del Servicio',
            'category_id'=>4
        ]);
        Process::create([
            'code'=>'DSS03',
            'name'=>'Gestionar los Problemas',
            'category_id'=>4
        ]);
        Process::create([
            'code'=>'DSS04',
            'name'=>'Gestionar la Continuidad',
            'category_id'=>4
        ]);
        Process::create([
            'code'=>'DSS05',
            'name'=>'Gestionar los Servicios de Seguridad',
            'category_id'=>4
        ]);
        Process::create([
            'code'=>'DSS06',
            'name'=>'Gestionar los Controles de los Procesos del Negocio',
            'category_id'=>4
        ]);

        Process::create([
            'code'=>'MEA01',
            'name'=>'Supervisar, Evaluar y Valorar Rendimiento y Conformidad',
            'category_id'=>5
        ]);
        Process::create([
            'code'=>'MEA02',
            'name'=>'Supervisar, Evaluar y Valorar el Sistema de Control Interno',
            'category_id'=>5
        ]);
        Process::create([
            'code'=>'MEA03',
            'name'=>'Supervisar, Evaluar y Valorar la Conformidad con los Requerimientos Externos',
            'category_id'=>5
        ]);
    }
}
