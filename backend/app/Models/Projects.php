<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Projects
 *
 * @property int $id_projeto
 * @property string $pronac
 * @property string $ano_projeto
 * @property string $nome
 * @property string $segmento
 * @property string $area
 * @property string $uf
 * @property string $municipio
 * @property string $data_inicio
 * @property string $data_termino
 * @property string $situacao
 * @property string $mecanismo
 * @property string $enquadramento
 * @property string $valor_captado
 * @property string $valor_aprovado
 * @property string $acessibilidade
 * @property string|null $objetivos
 * @property string|null $justificativa
 * @property string|null $etapa
 * @property string $ficha_tecnica
 * @property string $impacto_ambiental
 * @property string $especificacao_tecnica
 * @property string|null $providencia
 * @property string $democratizacao
 * @property string $sinopse
 * @property string $resumo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $valor_projeto
 * @property string $outras_fontes
 * @property string $valor_proposta
 * @property string $valor_solicitado
 * @property string $objetivo
 * @property string $estrategia_execucao
 * @property string $link_incentivadores
 * @method static \Illuminate\Database\Eloquent\Builder|Projects newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projects newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projects query()
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereAcessibilidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereAnoProjeto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereDataInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereDataTermino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereDemocratizacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereEnquadramento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereEspecificacaoTecnica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereEstrategiaExecucao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereEtapa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereFichaTecnica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereIdProjeto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereImpactoAmbiental($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereJustificativa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereLinkIncentivadores($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereMecanismo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereObjetivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereObjetivos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereOutrasFontes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects wherePronac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereProvidencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereResumo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereSegmento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereSinopse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereSituacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereValorAprovado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereValorCaptado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereValorProjeto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereValorProposta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projects whereValorSolicitado($value)
 * @mixin \Eloquent
 */
class Projects extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tb_projeto_rouanet_teste';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_projeto';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'pronac',
        'ano_projeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'data_inicio',
        'data_termino',
        'situacao',
        'mecanismo',
        'enquadramento',
        'valor_captado',
        'valor_aprovado',
        'acessibilidade',
        'objetivos',
        'justificativa',
        'etapa',
        'ficha_tecnica',
        'impacto_ambiental',
        'especificacao_tecnica',
        'providencia',
        'democratizacao',
        'sinopse',
        'resumo',
        'valor_projeto',
        'outras_fontes',
        'valor_proposta',
        'valor_solicitado',
        'objetivo',
        'estrategia_execucao',
        'link_incentivadores',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id_projeto' => 'integer',
        'pronac' => 'string',
        'ano_projeto' => 'string',
        'nome' => 'string',
        'segmento' => 'string',
        'area' => 'string',
        'uf' => 'string',
        'municipio' => 'string',
        'data_inicio' => 'string',
        'data_termino' => 'string',
        'situacao' => 'string',
        'mecanismo' => 'string',
        'enquadramento' => 'string',
        'valor_captado' => 'string',
        'valor_aprovado' => 'string',
        'acessibilidade' => 'string',
        'objetivos' => 'string',
        'justificativa' => 'string',
        'etapa' => 'string',
        'ficha_tecnica' => 'string',
        'impacto_ambiental' => 'string',
        'especificacao_tecnica' => 'string',
        'providencia' => 'string',
        'democratizacao' => 'string',
        'sinopse' => 'string',
        'resumo' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'valor_projeto' => 'string',
        'outras_fontes' => 'string',
        'valor_proposta' => 'string',
        'valor_solicitado' => 'string',
        'objetivo' => 'string',
        'estrategia_execucao' => 'string',
        'link_incentivadores' => 'string',
    ];

}
