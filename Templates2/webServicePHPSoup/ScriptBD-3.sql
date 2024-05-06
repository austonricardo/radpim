
create table T[NomeEntidade]
(
	[TipoColuna-PK]
	[NomeAtributo] [TipoDB] UNSIGNED NOT NULL AUTO_INCREMENT,
	[\TipoColuna-PK]
	[TipoColuna-FK]
	[NomeAtributo] [TipoDB],
	[\TipoColuna-FK]				
	[TipoColuna-Texto]
	[NomeAtributo] [TipoDB]([TamanhoCampo]),
	[\TipoColuna-Texto]
	[TipoColuna-Numero]
	[NomeAtributo] [TipoDB],
	[\TipoColuna-Numero]
	[TipoColuna-Data]
	[NomeAtributo] [TipoDB],
	[\TipoColuna-Data]	
	[TipoColuna-Moeda]
	[NomeAtributo] [TipoDB],
	[\TipoColuna-Moeda]		
	Atualizacao DATETIME,
	
	[TipoColuna-FK]
	INDEX [NomeEntidade]_FKI([NomeAtributo]),
	[\TipoColuna-FK]				
	[TipoColuna-PK]
	primary key([NomeAtributo])
	[\TipoColuna-PK]
);		

	