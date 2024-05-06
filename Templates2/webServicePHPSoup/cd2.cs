           //Obtem [NomeEntidade] do servidor
            GenericDAO<SmartSMV.BusinessEntity.[NomeEntidade]> itemDAO = new GenericDAO<SmartSMV.BusinessEntity.[NomeEntidade]>();
            WebSMV.[NomeEntidade][] itensInServer = service.get[NomeEntidade](String.Format("{0:MM/dd/YYYY}", DateTime.Now), codigoUsuario.ToString());
            foreach (WebSMV.[NomeEntidade] item in itensInServer)
            {
                SmartSMV.BusinessEntity.[NomeEntidade] nItem = new SmartSMV.BusinessEntity.[NomeEntidade]();
				[TipoColuna-FK]
				nItem.[NomeAtributo] = item.[NomeAtributo];
				[\TipoColuna-FK]		
				[TipoColuna-*]
				nItem.[NomeAtributo] = item.[NomeAtributo];
				[\TipoColuna-*]	
				[TipoColuna-PK]
				nItem.[NomeAtributo] = item.[NomeAtributo];
				[\TipoColuna-PK]				
                itemDAO.save(nItem);
            }
