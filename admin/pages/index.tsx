import * as React from 'react'
import { MultiEditPage, Repeater, TextField } from '@contember/admin'

export const index = (
	<MultiEditPage entities="Author">
		<TextField label="Autor" field="name" />
		<Repeater label="Knihy" field="books" orderBy={undefined}>
			<TextField label="Název" field="title" />
		</Repeater>
	</MultiEditPage>
)