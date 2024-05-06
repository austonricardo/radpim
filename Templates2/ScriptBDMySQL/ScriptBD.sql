
create table T[NomeEntidade]
(
	[TipoColuna-PK]
	[variavelAtributo] [TipoDB] UNSIGNED NOT NULL AUTO_INCREMENT,
	[\TipoColuna-PK]
	[TipoColuna-FK]
	[variavelAtributo] [TipoDB],
	[\TipoColuna-FK]				
	[TipoColuna-Texto]
	[variavelAtributo] [TipoDB]([TamanhoCampo]),
	[\TipoColuna-Texto]
	[TipoColuna-Letra]
	[variavelAtributo] [TipoDB]([TamanhoCampo]),
	[\TipoColuna-Letra]	
	[TipoColuna-Numero]
	[variavelAtributo] [TipoDB],
	[\TipoColuna-Numero]
	[TipoColuna-Data]
	[variavelAtributo] [TipoDB],
	[\TipoColuna-Data]	
	[TipoColuna-Moeda]
	[variavelAtributo] [TipoDB],
	[\TipoColuna-Moeda]		
	
	[TipoColuna-FK]
	INDEX [NomeEntidade]_[variavelAtributo]_FKI([variavelAtributo]),
	[\TipoColuna-FK]				
	[TipoColuna-PK]
	primary key([variavelAtributo])
	[\TipoColuna-PK]
);		

	