import * as React from 'react'
import { Menu } from '@contember/admin'

export const Navigation = () => (
	<Menu>
		<Menu.Item title=" ">
			<Menu.Item title="Dashboard" to="index" />
		</Menu.Item>
	</Menu>
)
