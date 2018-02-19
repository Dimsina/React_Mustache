import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Album_ById from './Album_ById'
import Album_Roster_All from './Album_Roster_All'

const Album = () => (
	<Switch>
		<Route exact path='/album' component={Album_Roster_All}/>
		<Route  path='/album/page/:page' component={Album_Roster_All}/>
		<Route path='/album/:id' component={Album_ById}/>
	</Switch>
);

export default Album;