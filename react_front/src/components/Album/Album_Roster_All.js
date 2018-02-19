import React from "react";
import { Link } from 'react-router-dom'

class Album_Roster_All extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: []
		};
		this.url = this.props.match.params.page ? `http://localhost/api/albums/read_paging.php?page=${this.props.match.params.page}`: `http://localhost/api/albums/read_paging.php`;
	}

	componentDidMount() {
		fetch(this.url)
			.then(res => res.json())
			.then(
				(result) => {
					console.log(result);
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			console.log(items);
			return (
				<div>
				<ul>
					{items.map(album => (

						<li	 key={album.id}>
							<Link to={`/album/${album.id}`}>{album.name}</Link>
							<p><br/> {album.name}</p>
							<p> <br/> {album.genre}</p>
							<a href={album.cover}><img src={album.cover_small} /></a><br/>
							<p><br/> {album.description}</p>
							<p><br/> {album.description}</p>
							<p><br/> {album.description} </p>
						</li>
					))}
				</ul>
				<div className="pagination">
				{items[items.length - 1]['paging']['pages'].map(page =>(
						<Link to={page.url} >{page.page}</Link>
					))}
				</div>
				</div>
			);
		}
	}
}

export default Album_Roster_All;