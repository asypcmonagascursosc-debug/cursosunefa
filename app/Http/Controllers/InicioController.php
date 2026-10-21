<?php

namespace App\Http\Controllers;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Inscrito;
use Illuminate\Support\Facades\DB;
class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }
    public function index()
    {
        //$cursos = Inscrito::select('curso_id', DB::raw('count(*) as total'))
       // ->groupBy('curso_id')->toSQL();
     

$cursos= Inscrito::select('inscritos.curso_id'
,'curso.nombre', DB::raw('count(*) as total')
      )
->join('curso', 'curso.id', '=', 'inscritos.curso_id')

->groupby('inscritos.curso_id')->get();
//dd($cursos);
 
        return view('administrador.inicio')
        ->with('cursos',$cursos);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $idUsuario = 3;
        $detalles= Estudiante::select('estudiantes.cedula',
        'estudiantes.apellido','estudiantes.nombre','estudiantes.direccion','estudiantes.municipio',
        'estudiantes.parroquia','curso.termino', 'estudiantes.telefono', 'estudiantes.email','curso.nombre as tema'
        )
->join('inscritos', 'estudiantes.id', '=', 'inscritos.estudiante_id')
->join('curso', 'curso.id', '=', 'inscritos.curso_id')
->where('curso.id', '=', "$id")
->get();
//dd($planilla);

foreach($detalles as $row)
{
   $termino= $row->termino;
   $tema=$row->tema;
}
        $this->fpdf->SetFont('Arial','B',10);    
        $this->fpdf->AddPage("L", 'Letter');
        $textypos = 5;
        $this->fpdf->setY(12);
        $this->fpdf->setX(10);
        // Agregamos los datos de la empresa
        // $this->fpdf->Cell(5,$textypos,"NOMBRE DE LA EMPRESA");
        $this->fpdf->Image(public_path('img/post/escudo.png'), 200, 5, 50, 0, 'PNG');
        $this->fpdf->Image(public_path('img/post/escudo1.png'), 30, 5, 50, 0, 'PNG');
        $this->fpdf->SetFont('Arial','B',12);    
       // $this->fpdf->setY(50);$this->fpdf->setX(10);
       $this->fpdf->Cell(0, 5, utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('MINISTERIO DEL PODER POPULAR PARA LA DEFENSA '), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('VICEMINISTERIO DE EDUCACIÓN PARA LA DEFENSA'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('UNIVERSIDAD NACIONAL EXPERIMENTAL POLITÉCNICA '), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('DE LA FUERZA ARMADA NACIONAL'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('ÁREA DE ASUNTOS SOCIALES Y PARTICIPACIÓN CIUDADANA'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('COORDINACIÓN DE FORMACIÓN PATRIÓTICA'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode('DE LA FUERZA ARMADA NACIONAL'), 0, 1, 'C');
       $this->fpdf->Cell(0, 5, utf8_decode($tema.' '.'Termino '.$termino.'-2026'), 0, 1, 'C');
      
        
      
        
        /// Apartir de aqui empezamos con la tabla de productos
        $this->fpdf->SetFont('Arial','B',12); 
        $this->fpdf->setY(60);$this->fpdf->setX(135);
            $this->fpdf->Ln(2);
           $this->fpdf->Cell(0, 5, utf8_decode(' Reporte de paticipantes inscritos '), 0, 1, 'C');
        /////////////////////////////
        $this->fpdf->SetFont('Arial','B',9); 
        //// Array de Cabecera
        $header = array(utf8_decode("N°."), utf8_decode("Nombres y apellidos "), utf8_decode("Cédula "),
         utf8_decode("Teléfono "), utf8_decode("Correo "), utf8_decode("Dirección "));
        //// Arrar de Productos
        
            // Column widths
            $w = array(6, 55, 20, 23,65, 80);
            // Header
            for($i=0;$i<count($header);$i++)
                $this->fpdf->Cell($w[$i],7,$header[$i],1,0,'C');
            $this->fpdf->Ln();
            // Data
            $cont = 0;
            foreach($detalles as $row)
            {
                $this->fpdf->Cell($w[0],6,$cont+1,1);
                $this->fpdf->Cell($w[1],6,utf8_decode($row->nombre.' '.$row->apellido),1);
                $this->fpdf->Cell($w[2],6,utf8_decode($row->cedula),1);
                $this->fpdf->Cell($w[3],6,utf8_decode($row->telefono),1);
                $this->fpdf->Cell($w[4],6,utf8_decode($row->email),1);
                $this->fpdf->Cell($w[5],6,utf8_decode($row->direccion),1);
        
                $this->fpdf->Ln();
                //$total+=$row[3]*$row[2];
                $cont++;
        
            }
       
           

        $this->fpdf->output();

        //$this->fpdf->Output();

        exit;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
